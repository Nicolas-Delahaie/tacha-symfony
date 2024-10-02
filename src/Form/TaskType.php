<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('start_date', null, [
                'widget' => 'single_text',
            ])
            ->add('start_time', null, [
                'widget' => 'single_text',
            ])
            ->add('title')
            ->add('description')
            ->add('is_hidden')
            ->add('is_achieved')
            ->add('priority')
            ->add('desire')
            ->add('concentration')
            ->add('workload')
            ->add('deadline', null, [
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
