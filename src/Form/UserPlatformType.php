<?php

namespace App\Form;

use App\Entity\Platform;
use App\Entity\UserPlatform;
use App\Repository\PlatformRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class UserPlatformType extends AbstractType
{
    public $translator;

    public function __construct(TranslatorInterface $translator, EntityManagerInterface $entityManager)
    {
        $this->translator = $translator;
        $this->em = $entityManager;
    }
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('platform', EntityType::class, array(
                'class' => Platform::class,
                'query_builder' => function (PlatformRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.name', 'ASC');
                },
                'choice_label' => 'name',
                'choice_attr' => function($choice, $key, $value) {
                    $repository = $this->em->getRepository(Platform::class);
                    $platform = $repository->findOneById($value);
                    return ['data-name' => $platform->getName() ];
                },
                'label' => 'LABEL_SELECT_PLATFORM',
                'attr' => array(
                    'name' => 'name'
                ),
                'required' => true,
                'translation_domain' => 'message'
            ))
            ->add('publicKey', TextType::class, array(
                'label' => 'LABEL_PUBLIC_KEY',
                'attr' => array(
                    'placeholder' => 'PLACEHOLDER_PUBLIC_KEY'
                ),
                'required' => false,
                'translation_domain' => 'message'
            ))
            ->add('secretKey', TextType::class, array(
                'label' => 'LABEL_SECRET_KEY',
                'attr' => array(
                    'placeholder' => 'PLACEHOLDER_SECRET_KEY'
                ),
                'required' => false,
                'translation_domain' => 'message'
            ))
            ->add('address', TextType::class, array(
                'label' => 'LABEL_ADDRESS',
                'attr' => array(
                    'placeholder' => 'PLACEHOLDER_ADDRESS_CRYPTO'
                ),
                'required' => false,
                'translation_domain' => 'message'
            ))
            ->add('passphrase', TextType::class, array(
                'label' => 'LABEL_PASSPHRASE',
                'attr' => array(
                    'placeholder' => 'PLACEHOLDER_PASSPHRASE'
                ),
                'required' => false,
                'translation_domain' => 'message'
            ))
            ->add('editId', HiddenType::class, array(
                'required' => false,
                'mapped' => false
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserPlatform::class,
        ]);
    }
}
