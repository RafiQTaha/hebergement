<?php

namespace ContainerDI9MJNj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QrSU191Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QrSU191' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QrSU191'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'enseignant' => ['privates', '.errored.ZY2nkfq', NULL, 'Cannot determine controller argument for "App\\Controller\\Parametre\\EnseignantController::delete()": the $enseignant argument is type-hinted with the non-existent class or interface: "App\\Entity\\PEnseignant".'],
        ], [
            'enseignant' => '?',
        ]);
    }
}
