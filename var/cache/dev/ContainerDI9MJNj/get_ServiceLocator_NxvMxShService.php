<?php

namespace ContainerDI9MJNj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NxvMxShService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NxvMxSh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NxvMxSh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sousModule' => ['privates', '.errored..service_locator.NxvMxSh.App\\Entity\\UsSousModule', NULL, 'Cannot autowire service ".service_locator.NxvMxSh": it references class "App\\Entity\\UsSousModule" but no such service exists.'],
            'user' => ['privates', '.errored..service_locator.NxvMxSh.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.NxvMxSh": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'sousModule' => 'App\\Entity\\UsSousModule',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
