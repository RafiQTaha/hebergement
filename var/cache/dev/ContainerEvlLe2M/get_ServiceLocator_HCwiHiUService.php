<?php

namespace ContainerEvlLe2M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HCwiHiUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hCwiHiU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hCwiHiU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bordereau' => ['privates', '.errored..service_locator.hCwiHiU.App\\Entity\\TBrdpaiement', NULL, 'Cannot autowire service ".service_locator.hCwiHiU": it references class "App\\Entity\\TBrdpaiement" but no such service exists.'],
        ], [
            'bordereau' => 'App\\Entity\\TBrdpaiement',
        ]);
    }
}
