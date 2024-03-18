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

#[Route('/promo/admin')]
class PromoAdminController extends AbstractController
{
    #[Route('/', name: 'app_promo_admin_index', methods: ['GET'])]
    public function index(PromoRepository $promoRepository): Response
    {
        return $this->render('admin/promo_admin/index.html.twig', [
            'promos' => $promoRepository->findAll(),
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

            return new Response('Promo created successfully', Response::HTTP_CREATED);
        }

        return $this->render('admin/promo_admin/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_promo_admin_show', methods: ['GET'])]
    public function show(Promo $promo): Response
    {
        return $this->render('admin/promo_admin/show.html.twig', [
            'promo' => $promo,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_promo_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Promo $promo, EntityManagerInterface $entityManager): Response
    {
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

            // Enregistrement de la promotion dans la base de données
            $entityManager->flush();

            return new Response('Promo updated successfully', Response::HTTP_OK);
        }

        return $this->render('admin/promo_admin/edit.html.twig', [
            'form' => $form->createView(),
            'promo' => $promo,
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
