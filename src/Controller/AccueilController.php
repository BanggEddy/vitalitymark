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
use App\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;

class AccueilController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_accueil')]
    public function index(ProductsRepository $productsRepository, PromoRepository $promoRepository): Response
    {
        $products = $productsRepository->findAll();
        $promotions = $promoRepository->findAll();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'products' => $products,
            'promotions' => $promotions,
        ]);
    }
    #[Route('/promo', name: 'app_promo')]
    public function promo(ProductsRepository $productsRepository, PromoRepository $promoRepository): Response
    {
        $promotions = $promoRepository->findAll();

        return $this->render('accueil/indexpromo.html.twig', [
            'controller_name' => 'AccueilController',
            'promotions' => $promotions,
        ]);
    }

    #[Route('/details-produit/{id}', name: 'details_produit')]
    public function detailsProduit($id): Response
    {
        $product = $this->entityManager->getRepository(Products::class)->find($id);

        return $this->render('accueil/indexproduit.html.twig', [
            'product' => $product
        ]);
    }

    #[Route('/details-promotion/{id}', name: 'details_promotion')]
    public function detailsPromotion($id): Response
    {
        $promo = $this->entityManager->getRepository(Promo::class)->find($id);

        return $this->render('accueil/indexproduit.html.twig', [
            'promo' => $promo
        ]);
    }

    //Rechercher un produit
    #[Route('/search', name: 'search')]
    public function search(Request $request, EntityManagerInterface $entityManager)
    {
        // Récupérer le terme de recherche depuis la requête
        $keyword = $request->request->get('keyword');

        // Récupérer les produits correspondant au nom du produit (correspondance partielle)
        $productsRepository = $entityManager->getRepository(Products::class);
        $products = $productsRepository->createQueryBuilder('p')
            ->where('p.name LIKE :keyword')
            ->setParameter('keyword', '%' . $keyword . '%')
            ->getQuery()
            ->getResult();

        // Récupérer les promotions correspondant au nom du produit (correspondance partielle)
        $promosRepository = $entityManager->getRepository(Promo::class);
        $promos = $promosRepository->createQueryBuilder('p')
            ->join('p.idproduct', 'pr')
            ->where('pr.name LIKE :keyword')
            ->setParameter('keyword', '%' . $keyword . '%')
            ->getQuery()
            ->getResult();

        return $this->render('accueil/search.html.twig', [
            'products' => $products,
            'promos' => $promos,
            'keyword' => $keyword,
        ]);
    }

    //Contact
    #[Route('/', name: 'app_contact')]
    public function indexcontact(): Response
    {
        return $this->render('accueil/contact.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    #[Route('/contact/submit', name: 'app_contact_submit')]
    public function submitContact(Request $request): Response
    {
        $entityManager = $this->entityManager;

        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $subject = $request->request->get('subject');
        $message = $request->request->get('message');

        $contact = new Contact();
        $contact->setName($name);
        $contact->setEmail($email);
        $contact->setSubject($subject);
        $contact->setObject($message);

        $entityManager->persist($contact);
        $entityManager->flush();

        return $this->redirectToRoute('app_contact');
    }
}
