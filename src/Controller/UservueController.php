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

class UservueController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/uservue', name: 'app_uservue')]
    public function index(ProductsRepository $productsRepository): Response
    {
        // Récupérer tous les produits disponibles depuis le repository
        $products = $productsRepository->findAll();

        return $this->render('user/uservue/index.html.twig', [
            'products' => $products,
            'controller_name' => 'UservueController',
        ]);
    }

    /**
     * @Route("/add_to_cart/{id}", name="add_to_cart", methods={"POST"})
     */
    #[Route('/add-to-cart/{id}', name: 'add_to_cart')]
    public function addToCart(Request $request, Products $product): Response
    {
        $quantity = $request->request->get('quantity');

        if ($quantity === null || !is_numeric($quantity) || $quantity <= 0) {
            return new JsonResponse(['error' => 'Invalid quantity provided.'], Response::HTTP_BAD_REQUEST);
        }

        $user = $this->getUser();
        if (!$user instanceof User) {
            return new JsonResponse(['error' => 'User not authenticated.'], Response::HTTP_UNAUTHORIZED);
        }

        // Vérifier si la quantité demandée est disponible
        if ($product->getQuantity() < $quantity) {
            return new JsonResponse(['error' => 'Not enough quantity available.'], Response::HTTP_BAD_REQUEST);
        }

        // Créer une nouvelle entrée dans le panier
        $panier = new Panier();
        $panier->setQuantity($quantity);
        $panier->setIdproducts($product);
        $panier->setIduser($user);

        // Décrémenter la quantité disponible du produit
        $product->setQuantity($product->getQuantity() - $quantity);

        // Enregistrer les modifications dans la base de données
        $this->entityManager->persist($panier);
        $this->entityManager->persist($product);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Product added to cart successfully.'], Response::HTTP_CREATED);
    }
    #[Route('/product/{id}', name: 'product_show')]
    public function show(Products $product): Response
    {
        // Votre logique pour afficher les détails du produit
        // Par exemple, vous pouvez passer le produit à un template Twig pour l'affichage
        return $this->render('user/uservue/panierindex.html.twig', [
            'product' => $product,
        ]);
    }
}
