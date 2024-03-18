<?php

namespace App\Form;

use App\Entity\Products;
use App\Entity\Promo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reduction')
            ->add('date_fin', null, [
                'widget' => 'single_text',
            ])
            ->add('date_debut', null, [
                'widget' => 'single_text',
            ])
            ->add('priceafterpromo')
            ->add('quantity')
            ->add('idproduct', EntityType::class, [
                'class' => Products::class,
                'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promo::class,
        ]);
    }
}
