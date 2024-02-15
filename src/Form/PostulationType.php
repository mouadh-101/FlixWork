<?php

namespace App\Form;

use App\Entity\Postulation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostulationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $options = [
            'under consideration' => 'under consideration',
            'rejected' => 'rejected',
            'approved' => 'approved',
        ];
        $builder
            ->add('cover_letter')
            ->add('etat', ChoiceType::class, [
                'choices' => $options,
                'label' => 'Etat',
                // Autres options pour le champ 'etat' si nécessaire
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Postulation::class,
        ]);
    }
}
