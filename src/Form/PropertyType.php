<?php

namespace App\Form;

use App\Entity\Property;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType :: class)
            ->add('description',TextType :: class)
            ->add('surface', NumberType ::class)
            ->add('rooms', NumberType ::class)
            ->add('bedrooms', NumberType ::class)
            ->add('floor', NumberType ::class)
            ->add('city', TextType :: class)
            ->add('address', TextType :: class)
            ->add('postalCode',NumberType ::class )
            ->add('sold', CheckboxType :: class )
            ->add('parking', CheckboxType :: class)
            ->add('status', TextType :: class)
            ->add('type', TextType :: class)
            ->add('price', NumberType ::class)
            ->add('country', TextType :: class)
            ->add('createdAt', DateType :: class)
            ->add('updatedAt', TextType :: class )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
