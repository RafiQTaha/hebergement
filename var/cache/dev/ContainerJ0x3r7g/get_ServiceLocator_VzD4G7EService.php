<?php

namespace ContainerJ0x3r7g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VzD4G7EService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vzD4G7E' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vzD4G7E'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annee' => ['privates', '.errored..service_locator.vzD4G7E.App\\Entity\\AcAnnee', NULL, 'Cannot autowire service ".service_locator.vzD4G7E": it references class "App\\Entity\\AcAnnee" but no such service exists.'],
        ], [
            'annee' => 'App\\Entity\\AcAnnee',
        ]);
    }
}
