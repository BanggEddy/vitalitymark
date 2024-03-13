<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminvueController extends AbstractController
{
    #[Route('adminvue', name: 'app_adminvue')]
    public function index(): Response
    {
        return $this->render('admin/adminvue/index.html.twig', [
            'controller_name' => 'AdminvueController',
        ]);
    }
}
