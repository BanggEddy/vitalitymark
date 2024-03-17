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
     * @Route("/add-to-cart/{id}", name="add_to_cart", methods={"POST"})
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

        try {
            $this->entityManager->beginTransaction();

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

            $this->entityManager->commit();

            return new JsonResponse(['message' => 'Product added to cart successfully.'], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            $this->entityManager->rollback();
            return new JsonResponse(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    #[Route('/user/panier', name: 'user_panier')]
    public function getUserPanier(): Response
    {
        /** @var UserInterface|null $user */
        $user = $this->getUser();

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $paniers = $user->getPaniers();

        $panierDetails = [];
        foreach ($paniers as $panier) {
            $panierDetails[] = [
                'product_name' => $panier->getIdproducts()->getName(),
                'price' => $panier->getIdproducts()->getPrice(),
                'quantity' => $panier->getQuantity(),
            ];
        }

        return $this->render('user/uservue/indexpanier.html.twig', [
            'panierDetails' => $panierDetails,
        ]);
    }
}
