<?php

namespace App\Form;

use App\Entity\Freelancer;
use App\Entity\Interview;
use App\Entity\Recruiter;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Mime\Message;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;


class InterviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $options = [
            'under consideration' => 'under consideration',
            'rejected' => 'rejected',
            'approved' => 'approved',
        ];
        $builder
        ->add('interview_date', DateType::class, [
            'constraints' => [
                new Assert\GreaterThan("today")
            ],
        ])
        ->add('interview_link', TextType::class, [
            'constraints' => [
                new Assert\Url([
                    'message' => 'The interview link must be a valid URL.',
                ]),
            ],
        ])
        ->add('description', TextareaType::class, [
            'constraints' => [
                new Assert\Length([
                    'max' => 255,
                    'maxMessage' => 'Description must be at most {{ limit }} characters long.',
                ]),
            ],
        ])
            ->add('etat', ChoiceType::class, [
                'choices' => $options,
                'label' => 'Etat',
                // Autres options pour le champ 'etat' si nécessaire
                ])
            ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Interview::class,
        ]);
    }
}
