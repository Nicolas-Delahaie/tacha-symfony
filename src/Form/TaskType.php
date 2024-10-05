<?php

namespace App\Form;

use App\Entity\Tag;
use App\Entity\Task;
use App\Entity\Workspace;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('startDate', null, [
                'widget' => 'single_text',
            ])
            ->add('startTime', null, [
                'widget' => 'single_text',
            ])
            ->add('title')
            ->add('description')
            ->add('isHidden')
            ->add('isAchieved')
            ->add('priority')
            ->add('desire')
            ->add('concentration')
            ->add('workload')
            ->add('deadline', null, [
                'widget' => 'single_text',
            ])
            ->add('father', EntityType::class, [
                'class' => Task::class,
                'choice_label' => 'title',
                'required' => false, // Rendre ce champ facultatif
            ])
            ->add('tags', EntityType::class, [
                'class' => Tag::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('workspace', EntityType::class, [
                'class' => Workspace::class,
                'choice_label' => function (Workspace $workspace) {
                    return "Workspace from ".$workspace->getOwner()->getEmail();
                },
                'required' => true,
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
