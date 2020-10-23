<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\UserType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',TextType::class, ['label' => 'Nom'])
            ->add('firstname', TextType::class,['label' => 'Prenom'])
            ->add('email')
            ->add('userTypes',EntityType::class,['class'=>UserType::class,'choice_label'=>'name','label'=>'Roles'])
            ->add('password',PasswordType::class,['label' => 'Mots de passe'])
            ->add('confirm_password',PasswordType::class,['label' => 'Confirmé'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
