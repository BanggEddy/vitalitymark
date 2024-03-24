<?php

namespace App\Controller;

use App\Entity\Products;
use App\Entity\Promo;
use App\Form\PromoType;
use App\Repository\PromoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Form\ProductSearchType;

#[Route('/promo/admin')]
class PromoAdminController extends AbstractController
{
    #[Route('/', name: 'app_promo_admin_index', methods: ['GET'])]
    public function index(PromoRepository $promoRepository, Request $request): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        return $this->render('admin/promo_admin/index.html.twig', [
            'promos' => $promoRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }

    #[Route('/new', name: 'app_promo_admin_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $promo = new Promo();
        $form = $this->createForm(PromoType::class, $promo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération de l'objet Products associé à l'ID fourni dans le formulaire
            $productId = $promo->getIdproduct()->getId();
            $product = $entityManager->getRepository(Products::class)->find($productId);

            if (!$product) {
                return new Response('Product not found', Response::HTTP_NOT_FOUND);
            }

            // Assignation des données du produit à la promotion
            $promo->setDescription($product->getDescription());
            $promo->setImages($product->getImages());
            $promo->setName($product->getName());
            $promo->setCategory($product->getCategory());
            $promo->setPrice($product->getPrice());

            // Calcul du prix après promotion
            $reduction = $promo->getReduction();
            $prixInitial = $promo->getPrice();
            $prixApresPromo = $prixInitial - ($prixInitial * ($reduction / 100));
            $promo->setPriceafterpromo($prixApresPromo);

            // Enregistrement de la promotion dans la base de données
            $entityManager->persist($promo);
            $entityManager->flush();

            return $this->redirectToRoute('app_promo_admin_index');
        }

        return $this->render('admin/promo_admin/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_promo_admin_show', methods: ['GET'])]
    public function show(Promo $promo, Request $request): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }
        return $this->render('admin/promo_admin/show.html.twig', [
            'promo' => $promo,
            'form' => $form->createView(),

        ]);
    }

    #[Route('/{id}/edit', name: 'app_promo_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Promo $promo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $category = $form->getData()['category'];

            // Redirection vers la page de catégorie avec le paramètre de catégorie
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $formPromo = $this->createForm(PromoType::class, $promo);
        $formPromo->handleRequest($request);

        if ($formPromo->isSubmitted() && $formPromo->isValid()) {
            // Récupération de l'objet Products associé à l'ID fourni dans le formulaire
            $productId = $promo->getIdproduct()->getId();
            $product = $entityManager->getRepository(Products::class)->find($productId);

            if (!$product) {
                return new Response('Product not found', Response::HTTP_NOT_FOUND);
            }

            // Assignation des données du produit à la promotion
            $promo->setDescription($product->getDescription());
            $promo->setImages($product->getImages());
            $promo->setName($product->getName());
            $promo->setCategory($product->getCategory());
            $promo->setPrice($product->getPrice());

            // Calcul du prix après promotion
            $reduction = $promo->getReduction();
            $prixInitial = $promo->getPrice();
            $prixApresPromo = $prixInitial - ($prixInitial * ($reduction / 100));
            $promo->setPriceafterpromo($prixApresPromo);

            // Enregistrement de la promotion dans la base de données
            $entityManager->flush();

            return $this->redirectToRoute('app_promo_admin_index');
        }

        return $this->render('admin/promo_admin/edit.html.twig', [
            'form' => $formPromo->createView(),
            'promo' => $promo,
            'search_form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_promo_admin_delete', methods: ['POST'])]
    public function delete(Request $request, Promo $promo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $promo->getId(), $request->request->get('_token'))) {
            $entityManager->remove($promo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_promo_admin_index', [], Response::HTTP_SEE_OTHER);
    }
}
