<?php

namespace App\Form;

use App\Entity\Claim;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;


class ClaimType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('subject', null, [
            'constraints' => [
                new Length([
                    'min' => 10,
                    'minMessage' => 'Subject must be at least {{ limit }} characters long',
                ]),
            ],
        ])
        ->add('claimFor',EntityType::class, [
            'class'=> User::class,
            'choice_label'=>'full_name','multiple'=>false, 'expanded'=>false
        ])
        ->add('description', TextareaType::class, [
            'label' => 'Description',
            'constraints' => [
                new Length([
                    'max' => 500,
                    'maxMessage' => 'Description cannot be longer than {{ limit }} characters',
                ]),
            ],
        ])
            ->add('date')
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'Not Yet' => 'Not Yet',
                    'In Process' => 'In Process',
                    'Answered' => 'Answered',
                ],
            ]);
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Claim::class,
        ]);
    }
}
