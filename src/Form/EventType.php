<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\Ticket;
use App\Entity\Category;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('location')
            ->add('price')
            ->add('date_start', DateType::class, [
                'widget' => 'single_text'])
            ->add('date_end', DateType::class, [
                'widget' => 'single_text'])
            ->add('quantity')
            // ->add('imageFile',FileType::class)
            // ->add('tickets',EntityType::class,['class'=>Ticket::class,'choice_label'=>'id'])
            ->add('category',EntityType::class,['class'=>Category::class,'choice_label'=>'name'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
