<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductsRepository;
use App\Entity\Products;
use App\Entity\Panier;
use App\Entity\User;
use App\Entity\Promo;
use App\Entity\Contact;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Repository\PanierRepository;
use App\Repository\PromoRepository;
use App\Form\ProductSearchType;

class UservueController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // Nouvelle méthode pour calculer le prix total
    private function totalPrice($user, PanierRepository $panierRepository): float
    {
        $totalPrice = 0;
        $panier = $panierRepository->findBy(['iduser' => $user]);

        foreach ($panier as $item) {
            if ($item->getIdpromo() !== null) {
                $priceAfterPromo = $item->getIdpromo()->getPriceafterpromo();
                $totalPrice += $item->getQuantity() * $priceAfterPromo;
            } elseif ($item->getIdproducts() !== null) {
                $price = $item->getIdproducts()->getPrice();
                $totalPrice += $item->getQuantity() * $price;
            }
        }

        return $totalPrice;
    }

    #[Route('/uservue', name: 'app_uservue')]
    public function index(
        Request $request,
        ProductsRepository $productsRepository,
        PanierRepository $panierRepository,
        PromoRepository $promoRepository
    ): Response {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData()['category'];
            return new RedirectResponse($this->generateUrl('user_category_products', ['category' => $category]));
        }

        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;

        // Appel de la méthode totalPrice pour obtenir le prix total
        $totalPrice = $this->totalPrice($user, $panierRepository, $request);

        // Récupérer tous les produits
        $products = $productsRepository->findAll();

        // Récupérer toutes les promotions
        $promotions = $promoRepository->findAll();

        return $this->render('user/uservue/index.html.twig', [
            'products' => $products, // Passer les produits à la vue
            'controller_name' => 'UservueController',
            'totalPrice' => $totalPrice,
            'promotions' => $promotions,
            'user_id' => $userId,
            'form' => $form->createView(),
        ]);
    }


    #Promo Client
    #[Route('/user/promo', name: 'app_user_promo')]
    public function promo(ProductsRepository $productsRepository, PanierRepository $panierRepository, PromoRepository $promoRepository, Request $request, $category = null): Response
    {

        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('user_category_products', ['category' => $category]));
        }
        $user = $this->getUser();

        // Récupérer l'ID de l'utilisateur
        $userId = null;
        if ($user instanceof User) {
            // Récupérer l'ID de l'utilisateur
            $userId = $user->getId();
        }

        $products = $productsRepository->findAll();
        $user = $this->getUser();
        $promotions = $promoRepository->findAll();
        // Appel de la méthode totalPrice pour obtenir le prix total
        $totalPrice = $this->totalPrice($user, $panierRepository);

        return $this->render('user/uservue/promo.html.twig', [
            'products' => $products,
            'controller_name' => 'UservueController',
            'totalPrice' => $totalPrice,
            'promotions' => $promotions,
            'user_id' => $userId,
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    #Pour ajouter des produits dans le panier
    /**
     * @Route("/add-to-cart/{id}", name="add_to_cart", methods={"POST"})
     */
    #[Route('/add-to-cart/{id}', name: 'add_to_cart')]
    public function addToCart(Request $request, ProductsRepository $productsRepository, PromoRepository $promoRepository, $id, EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator): Response
    {
        $quantity = $request->request->get('quantity');

        if ($quantity === null || !is_numeric($quantity) || $quantity <= 0) {
            return new JsonResponse(['error' => 'Invalid quantity provided.'], Response::HTTP_BAD_REQUEST);
        }

        $user = $this->getUser();
        if (!$user instanceof User) {
            return new JsonResponse(['error' => 'User not authenticated.'], Response::HTTP_UNAUTHORIZED);
        }

        try {
            $this->entityManager->beginTransaction();

            $product = $productsRepository->find($id);
            $promo = $promoRepository->find($id);

            // Vérifier si le produit existe
            if ($product === null && $promo === null) {
                return new JsonResponse(['error' => 'Product not found.'], Response::HTTP_NOT_FOUND);
            }

            // Vérifier si la quantité demandée est disponible
            if ($product && $product->getQuantity() < $quantity) {
                return new JsonResponse(['error' => 'Not enough quantity available.'], Response::HTTP_BAD_REQUEST);
            }

            if ($promo && $promo->getQuantity() < $quantity) {
                return new JsonResponse(['error' => 'Not enough quantity available in the promotion.'], Response::HTTP_BAD_REQUEST);
            }

            $panier = new Panier();
            $panier->setQuantity($quantity);

            if ($product) {
                $panier->setIdproducts($product);
                // Décrémenter la quantité disponible du produit normal
                $product->setQuantity($product->getQuantity() - $quantity);
            } elseif ($promo) {
                $panier->setIdpromo($promo);
                // Décrémenter la quantité disponible de la promotion
                $promo->setQuantity($promo->getQuantity() - $quantity);
            }

            $panier->setIduser($user);

            // Enregistrer les modifications dans la base de données
            $this->entityManager->persist($panier);
            if ($product) {
                $this->entityManager->persist($product);
            } elseif ($promo) {
                $this->entityManager->persist($promo);
            }
            $this->entityManager->flush();

            $this->entityManager->commit();

            // Rediriger vers la page '/uservue'
            $url = $urlGenerator->generate('uservue');
            return new RedirectResponse($url);
        } catch (\Exception $e) {
            $this->entityManager->rollback();
            return new JsonResponse(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #Panier user
    #[Route('/user/panier', name: 'user_panier')]
    public function getUserPanier(PanierRepository $panierRepository, Request $request, $category = null): Response
    {

        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('user_category_products', ['category' => $category]));
        }

        /** @var UserInterface|null $user */
        $user = $this->getUser();

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
        $user = $this->getUser();

        // Récupérer l'ID de l'utilisateur
        $userId = null;
        if ($user instanceof User) {
            // Récupérer l'ID de l'utilisateur
            $userId = $user->getId();
        }
        $paniers = $panierRepository->findBy(['iduser' => $user]);

        $panierDetails = [];
        $promoDetails = [];
        $totalPrice = 0;
        foreach ($paniers as $panier) {
            $product = $panier->getIdproducts();

            // Vérifier si un produit est associé au panier
            if ($product) {
                $quantity = $panier->getQuantity();
                $price = 0; // Initialiser le prix à zéro

                // Récupérer le prix du produit
                $productPrice = $product->getPrice();

                // Calculer le sous-total pour chaque produit
                $subtotal = $productPrice * $quantity;
                $totalPrice += $subtotal; // Ajouter le sous-total au prix total

                // Ajouter les détails du panier
                $panierDetails[] = [
                    'product_name' => $product->getName(),
                    'price' => $productPrice,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal, // Ajouter le sous-total aux détails du panier
                ];
            }

            $promo = $panier->getIdpromo();

            // Vérifier si une promotion est associée au panier
            if ($promo) {
                // Créer un tableau pour stocker les détails de la promotion
                $promoDetails = [
                    'product_name' => $promo->getIdproduct()->getName(),
                    'price_after_promo' => $promo->getPriceafterpromo(),
                    'quantity' => $panier->getQuantity(),
                    'subtotal' => $promo->getPriceafterpromo() * $panier->getQuantity(), // Calculer le sous-total avec le prix après promo
                ];

                // Ajouter les détails de la promotion au tableau des détails du panier
                $panierDetails[] = $promoDetails;

                // Ajouter le prix de la promotion au prix total
                $totalPrice += $promoDetails['subtotal'];
            }
        }

        return $this->render('user/uservue/indexpanier.html.twig', [
            'category' => $category,
            'promoDetails' => $promoDetails,
            'panierDetails' => $panierDetails,
            'totalPrice' => $totalPrice,
            'user_id' => $userId,
            'form' => $form->createView(),
        ]);
    }

    #Chercher un article
    #[Route('/search/user', name: 'search_user')]
    public function search(
        Request $request,
        EntityManagerInterface $entityManager,
        PanierRepository $panierRepository,
        PromoRepository $promoRepository
    ) {
        // Récupérer le terme de recherche depuis la requête
        $keyword = $request->request->get('keyword');

        // Récupérer les produits correspondant au nom du produit (correspondance partielle)
        $productsRepository = $entityManager->getRepository(Products::class);
        $products = $productsRepository->createQueryBuilder('p')
            ->where('p.name LIKE :keyword')
            ->setParameter('keyword', '%' . $keyword . '%')
            ->getQuery()
            ->getResult();

        // Récupérer les promotions correspondant au nom du produit (correspondance partielle)
        $promosRepository = $entityManager->getRepository(Promo::class);
        $promos = $promosRepository->createQueryBuilder('p')
            ->join('p.idproduct', 'pr')
            ->where('pr.name LIKE :keyword')
            ->setParameter('keyword', '%' . $keyword . '%')
            ->getQuery()
            ->getResult();

        $user = $this->getUser();
        $panier = $panierRepository->findBy(['iduser' => $user]);
        $totalPrice = 0;

        // Calculer le prix total en parcourant les éléments du panier de l'utilisateur
        foreach ($panier as $item) {
            // Vérifier si l'élément du panier est une promotion ou un produit normal
            if ($item->getIdpromo() !== null) {
                // Si c'est une promotion, calculer le prix après la réduction
                $priceAfterPromo = $item->getIdpromo()->getPriceafterpromo();
                // Ajouter le prix après promotion au total
                $totalPrice += $item->getQuantity() * $priceAfterPromo;
            } elseif ($item->getIdproducts() !== null) {
                // Si c'est un produit normal, calculer le prix normal
                $price = $item->getIdproducts()->getPrice();
                // Ajouter le prix normal au total
                $totalPrice += $item->getQuantity() * $price;
            }
        }

        return $this->render('user/uservue/search.html.twig', [
            'products' => $products,
            'promos' => $promos,
            'keyword' => $keyword,
            'totalPrice' => $totalPrice,

        ]);
    }

    #[Route('/user/loyalty-card/{id}', name: 'user_loyalty_card')]
    public function redirectToUserLoyaltyCard($id): RedirectResponse
    {
        // Construire l'URL de redirection vers la page de la carte de fidélité
        $redirectUrl = $this->generateUrl('user_loyalty_card_page', ['id' => $id]);

        // Créer une réponse de redirection
        return new RedirectResponse($redirectUrl);
    }

    #[Route('/user/uservue/card/{id}', name: 'user_loyalty_card_page')]
    public function showUserLoyaltyCardPage($id, PanierRepository $panierRepository, Request $request, $category = null): Response
    {

        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('user_category_products', ['category' => $category]));
        }
        $user = $this->getUser();
        $totalPrice = 0;
        $user = $this->getUser();

        // Appel de la méthode totalPrice pour obtenir le prix total
        $totalPrice = $this->totalPrice($user, $panierRepository);

        $user = $this->getUser();

        $userId = null;
        if ($user instanceof User) {
            // Récupérer l'ID de l'utilisateur
            $userId = $user->getId();
        }
        // Récupérer l'utilisateur par son ID en utilisant l'EntityManager
        $user = $this->entityManager->getRepository(User::class)->find($id);

        // Vérifier si l'utilisateur existe
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $loyaltyCard = $user->getIdloyaltycard();

        // Vérifier si l'utilisateur a une carte de fidélité
        if (!$loyaltyCard) {
            throw $this->createNotFoundException('User has no loyalty card');
        }

        return $this->render('user/uservue/card.html.twig', [
            'loyaltyCard' => $loyaltyCard,
            'user_id' => $userId,
            'totalPrice' => $totalPrice,
            'form' => $form->createView(),
            'category' => $category,
        ]);
    }

    #Compte User
    #[Route('/user/profile', name: 'user_profile')]
    public function userProfile(PanierRepository $panierRepository, Request $request, $category = null): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('user_category_products', ['category' => $category]));
        }
        $user = $this->getUser();

        // Appel de la méthode totalPrice pour obtenir le prix total
        $totalPrice = $this->totalPrice($user, $panierRepository);


        // Récupérer l'ID de l'utilisateur
        $userId = null;
        if ($user instanceof User) {
            // Récupérer l'ID de l'utilisateur
            $userId = $user->getId();
        }
        return $this->render('user/uservue/user.html.twig', [
            'user' => $user,
            'user_id' => $userId,
            'totalPrice' => $totalPrice,
            'form' => $form->createView(),
            'category' => $category,
        ]);
    }

    /**
     * @Route("/edit_user_profile", name="edit_user_profile", methods={"POST"})
     */
    #[Route('edit/user/profile', name: 'edit_user_profile')]
    public function editUserProfile(Request $request, EntityManagerInterface $entityManager, PanierRepository $panierRepository): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }

        $email = $request->request->get('email');
        $name = $request->request->get('name');
        $adresse = $request->request->get('adresse');
        $civilite = $request->request->get('civilite');

        $user->setEmail($email);
        $user->setName($name);
        $user->setAdresse($adresse);
        $user->setCivilite($civilite);

        $entityManager->flush();

        return new RedirectResponse($this->generateUrl('user_profile_view'));
    }

    #[Route('/user/uservue/categorie/{category}', name: 'user_category_products')]
    public function showCategoryProducts($category, Request $request, EntityManagerInterface $entityManager, PanierRepository $panierRepository): Response
    {
        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;

        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData()['category'];
            return new RedirectResponse($this->generateUrl('user_category_products', ['category' => $category]));
        }

        // Appel de la méthode totalPrice pour obtenir le prix total
        $totalPrice = $this->totalPrice($user, $panierRepository);

        $products = $entityManager->getRepository(Products::class)->findBy(['category' => $category]);
        $promotions = $entityManager->getRepository(Promo::class)->findBy(['category' => $category]);

        return $this->render('user/uservue/categorie.html.twig', [
            'category' => $category,
            'products' => $products,
            'promotions' => $promotions,
            'form' => $form->createView(),
            'user_id' => $userId,
            'totalPrice' => $totalPrice,
        ]);
    }

    //Contact
    #[Route('/contact/user', name: 'app_contact_user')]
    public function indexcontact(
        Request $request,
        PanierRepository $panierRepository,

    ): Response {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);
        $category = null; // Initialiser $category à null

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            return new RedirectResponse($this->generateUrl('user_category_products', ['category' => $category]));
        }

        $user = $this->getUser();
        $userId = null;

        if ($user instanceof User) {
            $userId = $user->getId();
        }

        // Appel de la méthode totalPrice pour obtenir le prix total
        $totalPrice = $this->totalPrice($user, $panierRepository);

        return $this->render('user/uservue/contact.html.twig', [
            'controller_name' => 'AccueilController',
            'form' => $form->createView(),
            'category' => $category,
            'user_id' => $userId,
            'totalPrice' => $totalPrice,

        ]);
    }

    #Contact User
    /**
     * @Route("/contact/submit", name="app_contact_submit")
     */
    #[Route('/contact/user/submit', name: 'app_contact_user_submit')]
    public function submitContact(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();

        // Vérifier si l'utilisateur est connecté
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour soumettre le formulaire de contact.');
        }

        // Récupérer les données du formulaire
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $subject = $request->request->get('subject');
        $message = $request->request->get('message');

        // Créer une nouvelle instance de Contact
        $contact = new Contact();
        $contact->setName($name);
        $contact->setEmail($email);
        $contact->setSubject($subject);
        $contact->setObject($message);
        $contact->setIduser($user);

        // Enregistrer le contact dans la base de données
        $entityManager->persist($contact);
        $entityManager->flush();

        return $this->redirectToRoute('app_contact_user');
    }
}
