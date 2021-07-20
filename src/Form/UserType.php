<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastName', TextType::class, ['label' => 'Nom : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('firstName', TextType::class, ['label' => 'Prénom : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('birthDate', BirthdayType::class, ['label' => 'Date de naissance : ', 'placeholder' => ['day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'], 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('phoneNumber', TextType::class, ['label' => 'Numéro de téléphone : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('email', EmailType::class, ['label' => 'E-mail : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('password', PasswordType::class, ['label' => 'Password : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('address', TextType::class, ['label' => 'Adresse : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('city', TextType::class, ['label' => 'Ville : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('ZIPcode', TextType::class, ['label' => 'Code postale : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('country', TextType::class, ['label' => 'Pays : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('role', IntegerType::class, ['label' => 'Role : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
