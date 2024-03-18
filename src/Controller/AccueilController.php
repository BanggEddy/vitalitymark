<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductsRepository; // Assurez-vous d'importer le repository ici
use App\Repository\PromoRepository;

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
}
