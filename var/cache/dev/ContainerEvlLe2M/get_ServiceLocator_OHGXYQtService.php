<?php

namespace ContainerEvlLe2M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OHGXYQtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OHGXYQt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OHGXYQt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'filiere' => ['privates', '.errored.63UBRMI', NULL, 'Cannot determine controller argument for "App\\Controller\\Parametre\\FiliereController::delete()": the $filiere argument is type-hinted with the non-existent class or interface: "App\\Entity\\XFiliere".'],
        ], [
            'filiere' => '?',
        ]);
    }
}
