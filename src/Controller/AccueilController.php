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
        // Utilisez directement l'EntityManager
        $entityManager = $this->entityManager;

        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $subject = $request->request->get('subject');
        $message = $request->request->get('message');

        // Créer une nouvelle instance de l'entité Contact
        $contact = new Contact();
        $contact->setName($name);
        $contact->setEmail($email);
        $contact->setSubject($subject);
        $contact->setObject($message);

        // Persiste l'entité et effectue l'opération en base de données
        $entityManager->persist($contact);
        $entityManager->flush();

        // Redirige vers une page de confirmation ou affiche un message de succès
        return $this->redirectToRoute('app_contact');
    }
}
