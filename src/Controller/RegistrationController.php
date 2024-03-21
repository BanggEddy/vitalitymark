<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\AuthAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\LoyaltyCard;
use App\Form\LoyaltyCardType;
use Symfony\Component\Security\Core\User\UserInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $user->setRoles(['ROLE_USER']);

            // Create a new loyalty card for the user
            $loyaltyCard = new LoyaltyCard();
            $loyaltyCard->setCardNumber($this->generateRandomCardNumber());
            $loyaltyCard->setCardType('normal');
            $loyaltyCard->setPoints(10);

            // Associate the loyalty card with the user
            $user->setIdloyaltycard($loyaltyCard);
            $loyaltyCard->setIduser($user);

            $entityManager->persist($user);
            $entityManager->persist($loyaltyCard);
            $entityManager->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('auth/registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    // Function to generate a random card number
    private function generateRandomCardNumber(): string
    {
        return strtoupper(substr(md5(uniqid()), 0, 10));
    }
}
