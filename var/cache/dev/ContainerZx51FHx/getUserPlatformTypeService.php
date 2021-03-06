<?php

namespace ContainerZx51FHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserPlatformTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\UserPlatformType' shared autowired service.
     *
     * @return \App\Form\UserPlatformType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/UserPlatformType.php';

        return $container->privates['App\\Form\\UserPlatformType'] = new \App\Form\UserPlatformType(($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
