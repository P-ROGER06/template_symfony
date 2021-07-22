<?php

namespace App\Form;

use App\Entity\Photography;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PhotographyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'label' => 'Titre',
            ])
            ->add('media', UrlType::class, [
                'required' => true,
                'label' => 'Url',
            ])

            ->add('date', BirthdayType::class, [
                'widget' => 'single_text',
                'label' => 'date',
            ]);  
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Photography::class,
        ]);
    }
}
