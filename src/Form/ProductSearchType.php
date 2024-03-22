<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', ChoiceType::class, [
                'label' => false,
                'choices' => [
                    'Sélectionner une catégorie' => '',
                    'Produits frais' => 'Produits frais',
                    'Épicerie' => 'Épicerie',
                    'Boulangerie' => 'Boulangerie',
                    'Surgelés' => 'Surgelés',
                    'Boissons' => 'Boissons',
                    'Produits d\'hygiène et de beauté' => 'Produits d\'hygiène et de beauté',
                    'Entretien ménager' => 'Entretien ménager',
                    'Articles pour bébés et enfants' => 'Articles pour bébés et enfants',
                    'Produits de santé' => 'Produits de santé',
                    'Articles pour animaux de compagnie' => 'Articles pour animaux de compagnie',
                ],
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}
