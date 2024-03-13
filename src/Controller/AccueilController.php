<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductsRepository; // Assurez-vous d'importer le repository ici

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(ProductsRepository $productsRepository): Response
    {
        // Exemple d'utilisation du repository, vous pouvez le modifier selon vos besoins
        $products = $productsRepository->findAll();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'products' => $products,
        ]);
    }
}
