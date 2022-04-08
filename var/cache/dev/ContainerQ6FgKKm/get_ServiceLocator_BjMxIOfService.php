<?php

namespace ContainerQ6FgKKm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BjMxIOfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BjMxIOf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BjMxIOf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'requestStack' => ['services', 'request_stack', 'getRequestStackService', false],
        ], [
            'requestStack' => '?',
        ]);
    }
}
