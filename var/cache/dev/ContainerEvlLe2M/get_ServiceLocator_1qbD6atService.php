<?php

namespace ContainerEvlLe2M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1qbD6atService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1qbD6at' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1qbD6at'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'element' => ['privates', '.errored.H3uXOc7', NULL, 'Cannot determine controller argument for "App\\Controller\\Parametre\\ElementController::update()": the $element argument is type-hinted with the non-existent class or interface: "App\\Entity\\AcElement".'],
        ], [
            'element' => '?',
        ]);
    }
}
