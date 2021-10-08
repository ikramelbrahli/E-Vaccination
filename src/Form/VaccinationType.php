<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use App\Entity\Vaccination;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VaccinationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('statut', ChoiceType::class, array(
                'choices'  => array(
                    'non vaccine' => 'non vaccine',
                    'vaccine' => 'vaccine',
                ),
            ))
            ->add('date_vaccination')
            ->add('patient',null,[
                'disabled' => true,
            ])
            ->add('vaccin')
            ->add('centreVaccination');
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vaccination::class,
        ]);
    }
}
