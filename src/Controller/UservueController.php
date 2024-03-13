<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UservueController extends AbstractController
{
    #[Route('/uservue', name: 'app_uservue')]
    public function index(): Response
    {
        return $this->render('user/uservue/index.html.twig', [
            'controller_name' => 'UservueController',
        ]);
    }
}
