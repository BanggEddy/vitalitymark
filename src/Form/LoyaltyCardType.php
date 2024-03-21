<?php

namespace App\Form;

use App\Entity\LoyaltyCard;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoyaltyCardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('card_number')
            ->add('card_type', ChoiceType::class, [
                'choices' => [
                    'Normale' => 'normal',
                    'Étudiante' => 'etudiante',
                    'Premium' => 'premium',
                ],
                'label' => 'Type de carte',
            ])
            ->add('points')
            ->add('personalized_offer')
            ->add('iduser', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LoyaltyCard::class,
        ]);
    }
}
