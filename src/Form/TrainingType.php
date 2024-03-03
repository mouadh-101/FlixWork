<?php

namespace App\Form;

use App\Entity\Training;
use App\Entity\TrainingCategory;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class TrainingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title' , null, [
                'constraints' => [
                    new Length([
                        'min' => 10,
                        'minMessage' => 'donne un title au minimum de 10 caracteres',
                    ]),
                ],
            ])
            ->add('description' , null, [
                'constraints' => [
                    new Length([
                        'min' => 15,
                        'minMessage' => 'donner une description au minimum de 15 caracteres',

                    ]),
                ],
            ])
            ->add('start_date', null, [
                'constraints' => [
                    new Callback(function ($start_date, ExecutionContextInterface $context) {
                        $today = new \DateTime();
                        
                        if ($start_date < $today) {
                            $context->buildViolation('La date de début ne peut pas être dans le passé.')
                                ->atPath('start_date')
                                ->addViolation();
                        } elseif ($start_date->format('Y-m-d') == $today->format('Y-m-d')) {
                            $context->buildViolation('La date de début ne peut pas être la date actuelle.')
                                ->atPath('start_date')
                                ->addViolation();
                        }
                    }),
                ],
            ])
            ->add('end_date')
            ->add('number_of_places')
            ->add('category',EntityType::class, [
                'class' => TrainingCategory::class, 
                'choice_label' => 'category_name',
                'multiple' => false,
                'expanded' => false,
            ]);
    }
        
    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Training::class,
        ]);
    }

}