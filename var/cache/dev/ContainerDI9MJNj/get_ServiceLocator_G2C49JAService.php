<?php

namespace ContainerDI9MJNj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G2C49JAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.g2C49JA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.g2C49JA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'academie' => ['privates', '.errored.kUgmJmp', NULL, 'Cannot determine controller argument for "App\\Controller\\Parametre\\AcademieController::update()": the $academie argument is type-hinted with the non-existent class or interface: "App\\Entity\\XAcademie".'],
        ], [
            'academie' => '?',
        ]);
    }
}
