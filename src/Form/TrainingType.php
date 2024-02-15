<?php

namespace App\Form;

use App\Entity\Training;
use App\Entity\TrainingCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrainingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('start_date')
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