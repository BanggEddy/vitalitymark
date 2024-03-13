<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserpanierController extends AbstractController
{
    #[Route('/userpanier', name: 'app_userpanier')]
    public function index(): Response
    {
        return $this->render('user/userpanier/index.html.twig', [
            'controller_name' => 'UserpanierController',
        ]);
    }
}
