<?php

namespace ContainerEvlLe2M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EqwgwxFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EqwgwxF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EqwgwxF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'etage' => ['privates', '.errored..service_locator.EqwgwxF.App\\Entity\\PEtages', NULL, 'Cannot autowire service ".service_locator.EqwgwxF": it references class "App\\Entity\\PEtages" but no such service exists.'],
        ], [
            'etage' => 'App\\Entity\\PEtages',
        ]);
    }
}
