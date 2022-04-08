<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Contracts\Translation\TranslatorInterface;

class UserType extends AbstractType
{
    public $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('email', EmailType::class, array(
                'label' => 'LABEL_EMAIL',
                'attr' => array(
                    'placeholder' => 'PLACEHOLDER_EMAIL'
                ),
                'translation_domain' => 'message'
            ))
            ->add('pseudo', TextType::class, array(
                'label' => 'LABEL_PSEUDO',
                'attr' => array(
                    'placeholder' => 'PLACEHOLDER_PSEUDO'
                ),
                'translation_domain' => 'message'
            ))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array(
                    'label' => 'LABEL_PASSWORD',
                    'attr' => array(
                        'placeholder' => 'PLACEHOLDER_PASSWORD'
                    ),
                    'translation_domain' => 'message'
                ),
                'second_options' => array(
                    'label' => 'LABEL_PASSWORD_REPEAT',
                    'attr' => array(
                        'placeholder' => 'PLACEHOLDER_PASSWORD_REPEAT',
                        'style' => 'margin-bottom: 1rem'
                    ),
                    'translation_domain' => 'message'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
