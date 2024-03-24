<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductsRepository;
use App\Repository\PromoRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Products;
use App\Entity\Promo;
use App\Entity\Contact;
use App\Form\ProductSearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AccueilController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_accueil')]
    public function index(
        ProductsRepository $productsRepository,
        PromoRepository $promoRepository,
        Request $request,
    ): Response {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);
        $products = [];

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('accueil_category_products', ['category' => $category]));
        }

        $products = $productsRepository->findAll();
        $promotions = $promoRepository->findAll();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'products' => $products,
            'promotions' => $promotions,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/promo', name: 'app_promo')]
    public function promo(PromoRepository $promoRepository, Request $request): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('accueil_category_products', ['category' => $category]));
        }

        $promotions = $promoRepository->findAll();

        return $this->render('accueil/indexpromo.html.twig', [
            'controller_name' => 'AccueilController',
            'promotions' => $promotions,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/details-produit/{id}', name: 'details_produit')]
    public function detailsProduit($id, Request $request): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);
        $category = null;

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return $this->redirectToRoute('accueil_category_products', ['category' => $category]);
        }

        $product = $this->entityManager->getRepository(Products::class)->find($id);

        return $this->render('accueil/indexproduit.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/details-promotion/{id}', name: 'details_promotion')]
    public function detailsPromotion($id, Request $request): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);
        $category = null;

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return $this->redirectToRoute('accueil_category_products', ['category' => $category]);
        }

        $promo = $this->entityManager->getRepository(Promo::class)->find($id);

        return $this->render('accueil/indexproduit.html.twig', [
            'promo' => $promo,
            'form' => $form->createView(),
        ]);
    }

    //Rechercher un produit
    #[Route('/search', name: 'search')]
    public function search(Request $request, EntityManagerInterface $entityManager)
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);
        $category = null;

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return $this->redirectToRoute('accueil_category_products', ['category' => $category]);
        }

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

        return $this->render('accueil/search.html.twig', [
            'products' => $products,
            'promos' => $promos,
            'keyword' => $keyword,
            'form' => $form->createView(),
        ]);
    }

    //Contact
    #[Route('/', name: 'app_contact')]
    public function indexcontact(Request $request): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);
        $category = null;

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return $this->redirectToRoute('accueil_category_products', ['category' => $category]);
        }

        return $this->render('accueil/contact.html.twig', [
            'controller_name' => 'AccueilController',
            'form' => $form->createView(),
        ]);
    }

    #[Route('/contact/submit', name: 'app_contact_submit')]
    public function submitContact(Request $request): Response
    {
        $entityManager = $this->entityManager;

        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $subject = $request->request->get('subject');
        $message = $request->request->get('message');

        $contact = new Contact();
        $contact->setName($name);
        $contact->setEmail($email);
        $contact->setSubject($subject);
        $contact->setObject($message);

        $entityManager->persist($contact);
        $entityManager->flush();

        return $this->redirectToRoute('app_contact');
    }


    #[Route('/accueil/categorie/{category}', name: 'accueil_category_products')]
    public function showCategoryProductsAccueil(Request $request): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);
        $category = null;

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return $this->redirectToRoute('accueil_category_products', ['category' => $category]);
        }

        // Si aucune catégorie n'est sélectionnée via le formulaire, utilisez celle fournie dans l'URL
        $category = $request->get('category');
        $products = $this->entityManager->getRepository(Products::class)->findBy(['category' => $category]);
        $promotions = $this->entityManager->getRepository(Promo::class)->findBy(['category' => $category]);

        return $this->render('accueil/categorie.html.twig', [
            'category' => $category,
            'products' => $products,
            'promotions' => $promotions,
            'form' => $form->createView(),
        ]);
    }
}
