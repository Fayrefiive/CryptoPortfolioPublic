<?php

namespace App\Form;

use App\Entity\Platform;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PlatformType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => 'LABEL_PLATFORM_NAME',
                'attr' => array(
                    'placeholder' => 'PLACEHOLDER_PLATFORM_NAME'
                ),
                'translation_domain' => 'message'
            ))
            ->add('image', FileType::class, array(
                'label' => 'LABEL_PLATFORM_IMAGE',
                'attr' => array(
                    'placeholder' => 'PLACEHOLDER_PLATFORM_IMAGE'
                ),
                'translation_domain' => 'message'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Platform::class,
        ]);
    }
}
