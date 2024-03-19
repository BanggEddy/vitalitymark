<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductsRepository;
use App\Entity\Products;
use App\Entity\Panier;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Repository\PanierRepository;
use App\Repository\PromoRepository;

class UservueController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/uservue', name: 'app_uservue')]
    public function index(ProductsRepository $productsRepository, PanierRepository $panierRepository, PromoRepository $promoRepository): Response
    {
        // Récupérer tous les produits disponibles depuis le repository
        $products = $productsRepository->findAll();

        // Récupérer le panier de l'utilisateur
        $user = $this->getUser();
        $panier = $panierRepository->findBy(['iduser' => $user]);
        $promotions = $promoRepository->findAll();

        // Initialiser le prix total du panier
        $totalPrice = 0;

        // Parcourir les éléments du panier
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

        return $this->render('user/uservue/index.html.twig', [
            'products' => $products,
            'controller_name' => 'UservueController',
            'totalPrice' => $totalPrice, // Passer le prix total au template Twig
            'promotions' => $promotions, // Passer les promotions à la vue
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

            // Créer une nouvelle entrée dans le panier
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
    #[Route('/user/panier', name: 'user_panier')]
    public function getUserPanier(PanierRepository $panierRepository): Response
    {
        /** @var UserInterface|null $user */
        $user = $this->getUser();

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Récupérer les paniers de l'utilisateur depuis le repository
        $paniers = $panierRepository->findBy(['iduser' => $user]);

        $panierDetails = [];
        $promoDetails = [];
        $totalPrice = 0; // Initialiser le prix total à zéro
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

            // Récupérer la promotion associée au panier
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
            'promoDetails' => $promoDetails,
            'panierDetails' => $panierDetails,
            'totalPrice' => $totalPrice, // Passer le prix total au template Twig
        ]);
    }
}
