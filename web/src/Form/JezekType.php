<?php

namespace App\Form;

use App\Entity\Jezek;
use App\Entity\Test1;
use App\Entity\Test2;
use App\Entity\Test3;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JezekType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cena' , EntityType::class, ["class" => Test1::class, 'choice_label' => 'test1'])
            ->add('znak' , EntityType::class, ["class" => Test2::class, 'choice_label' => 'test2'])
            ->add('Vuz' , EntityType::class, ["class" => Test3::class , 'choice_label' => 'test3'])
            ->add('jmeno' , TextType::class)
            ->add('poznavacicislo' , TextareaType::class)
            ->add('heslo' , PasswordType::class)
            ->add('datum' , RadioType::class)
            ->add('email' , EmailType::class)
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Jezek::class,
        ]);
    }
}
