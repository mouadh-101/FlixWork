<?php

namespace App\Form;

use App\Entity\TrainingCategory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class TrainingCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('category_name' , null, [
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'donner un nom de categorie au minimum de 6 caracteres'
                    ]),
                ],
            ])
    ;}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TrainingCategory::class,
        ]);
    }
}
