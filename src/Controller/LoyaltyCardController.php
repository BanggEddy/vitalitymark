<?php

namespace App\Controller;

use App\Entity\LoyaltyCard;
use App\Form\LoyaltyCardType;
use App\Repository\LoyaltyCardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/loyalty/card')]
class LoyaltyCardController extends AbstractController
{
    #[Route('/', name: 'app_loyalty_card_index', methods: ['GET'])]
    public function index(LoyaltyCardRepository $loyaltyCardRepository): Response
    {
        return $this->render('admin/loyalty_card/index.html.twig', [
            'loyalty_cards' => $loyaltyCardRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_loyalty_card_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $loyaltyCard = new LoyaltyCard();
        $form = $this->createForm(LoyaltyCardType::class, $loyaltyCard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($loyaltyCard);
            $entityManager->flush();

            return $this->redirectToRoute('app_loyalty_card_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/loyalty_card/new.html.twig', [
            'loyalty_card' => $loyaltyCard,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_loyalty_card_show', methods: ['GET'])]
    public function show(LoyaltyCard $loyaltyCard): Response
    {
        return $this->render('admin/loyalty_card/show.html.twig', [
            'loyalty_card' => $loyaltyCard,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_loyalty_card_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, LoyaltyCard $loyaltyCard, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LoyaltyCardType::class, $loyaltyCard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_loyalty_card_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/loyalty_card/edit.html.twig', [
            'loyalty_card' => $loyaltyCard,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_loyalty_card_delete', methods: ['POST'])]
    public function delete(Request $request, LoyaltyCard $loyaltyCard, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $loyaltyCard->getId(), $request->request->get('_token'))) {
            // Définir l'utilisateur associé à null
            $loyaltyCard->setIduser(null);

            // Supprimer la carte de fidélité
            $entityManager->remove($loyaltyCard);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_loyalty_card_index', [], Response::HTTP_SEE_OTHER);
    }
}
