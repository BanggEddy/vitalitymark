<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductsRepository;

class UservueController extends AbstractController
{
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
}
