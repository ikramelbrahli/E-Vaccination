<?php

namespace App\Form;

use App\Entity\Citoyen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CitoyenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('CIN')
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('age')
            ->add('GSM')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Citoyen::class,
        ]);
    }
}
