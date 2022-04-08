<?php

namespace App\Form;

use App\Entity\Currency;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CurrencyType extends AbstractType
{
    public $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('acronym', TextType::class, array(
                'label' => 'LABEL_CURRENCY_ACRONYM',
                'attr' => array(
                    'placeholder' => 'PLACEHOLDER_CURRENCY_ACRONYM'
                ),
                'translation_domain' => 'message'
            ))
            ->add('name', TextType::class, array(
                'label' => 'LABEL_CURRENCY_NAME',
                'attr' => array(
                    'placeholder' => 'PLACEHOLDER_CURRENCY_NAME'
                ),
                'translation_domain' => 'message'
            ))
            ->add('symbol', TextType::class, array(
                'label' => 'LABEL_CURRENCY_SYMBOL',
                'attr' => array(
                    'placeholder' => 'PLACEHOLDER_CURRENCY_SYMBOL'
                ),
                'translation_domain' => 'message'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Currency::class,
        ]);
    }
}
