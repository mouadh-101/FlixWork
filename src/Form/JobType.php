<?php

namespace App\Form;

use App\Entity\Job;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\Regex;
use App\Entity\JobsCategory;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Job Title',
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a job title.']),
                    new Length([
                        'max' => 255,
                        'maxMessage' => 'The job title cannot be longer than {{ 10 }} characters.',
                    ]),
                ],
            ])
            
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a job description.']),
                ],
            ])
            ->add('deadline', DateType::class, [
                'label' => 'Deadline',
                'widget' => 'single_text',
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a deadline.']),
                    new GreaterThan([
                        'value' => 'today',
                        'message' => 'The deadline should be a future date.',
                    ]),
                ],
            ])
            ->add('type', TextType::class, [
                'label' => 'Job Type',
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a job type.']),
                ],
            ])
            ->add('salary', MoneyType::class, [
                'label' => 'Salary',
                'currency' => false, // Désactive la devise pour n'accepter que des valeurs numériques
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a salary.']),
                    new Regex([
                        'pattern' => '/^\d+(\.\d{1,2})?$/',
                        'message' => 'Salary must be a valid numeric value.',
                    ]),
                ],
            ])
            ->add('category', EntityType::class, [
                'class' => JobsCategory::class,
                'choice_label' => 'categoryName',
                'label' => 'Category',
                'constraints' => [
                    new NotBlank(['message' => 'Please select a category.']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Job::class,
        ]);
    }
}
