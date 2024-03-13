<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AjoutproductsController extends AbstractController
{
    #[Route('/ajoutproducts', name: 'app_ajoutproducts')]
    public function index(): Response
    {
        return $this->render('ajoutproducts/index.html.twig', [
            'controller_name' => 'AjoutproductsController',
        ]);
    }
}
