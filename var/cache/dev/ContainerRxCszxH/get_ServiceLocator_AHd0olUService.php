<?php

namespace ContainerRxCszxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AHd0olUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aHd0olU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aHd0olU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'module' => ['privates', '.errored..service_locator.aHd0olU.App\\Entity\\UsModule', NULL, 'Cannot autowire service ".service_locator.aHd0olU": it references class "App\\Entity\\UsModule" but no such service exists.'],
            'user' => ['privates', '.errored..service_locator.aHd0olU.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.aHd0olU": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'module' => 'App\\Entity\\UsModule',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
