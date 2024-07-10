<?php

namespace ContainerDI9MJNj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MoowPuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Moow_pu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Moow_pu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'facture' => ['privates', '.errored..service_locator.Moow_pu.App\\Entity\\TOperationcab', NULL, 'Cannot autowire service ".service_locator.Moow_pu": it references class "App\\Entity\\TOperationcab" but no such service exists.'],
        ], [
            'facture' => 'App\\Entity\\TOperationcab',
        ]);
    }
}
