<?php

namespace ContainerRxCszxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KbeyOkTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kbeyOkT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kbeyOkT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'frais' => ['privates', '.errored..service_locator.kbeyOkT.App\\Entity\\PFrais', NULL, 'Cannot autowire service ".service_locator.kbeyOkT": it references class "App\\Entity\\PFrais" but no such service exists.'],
        ], [
            'frais' => 'App\\Entity\\PFrais',
        ]);
    }
}
