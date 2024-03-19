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

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(ProductsRepository $productsRepository, PromoRepository $promoRepository): Response
    {
        // Récupérer tous les produits
        $products = $productsRepository->findAll();

        // Récupérer toutes les promotions
        $promotions = $promoRepository->findAll();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'products' => $products,
            'promotions' => $promotions, // Passer les promotions à la vue
        ]);
    }
    #[Route('/promo', name: 'app_promo')]
    public function promo(ProductsRepository $productsRepository, PromoRepository $promoRepository): Response
    {

        // Récupérer toutes les promotions
        $promotions = $promoRepository->findAll();

        return $this->render('accueil/indexpromo.html.twig', [
            'controller_name' => 'AccueilController',
            'promotions' => $promotions, // Passer les promotions à la vue
        ]);
    }
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/details-produit/{id}', name: 'details_produit')]
    public function detailsProduit($id): Response
    {
        // Récupérer le produit depuis la base de données
        $product = $this->entityManager->getRepository(Products::class)->find($id);

        // Afficher la vue avec les détails du produit
        return $this->render('accueil/indexproduit.html.twig', [
            'product' => $product
        ]);
    }

    #[Route('/details-promotion/{id}', name: 'details_promotion')]
    public function detailsPromotion($id): Response
    {
        // Récupérer la promotion depuis la base de données
        $promo = $this->entityManager->getRepository(Promo::class)->find($id);

        // Afficher la vue avec les détails de la promotion
        return $this->render('accueil/indexproduit.html.twig', [
            'promo' => $promo
        ]);
    }
}
