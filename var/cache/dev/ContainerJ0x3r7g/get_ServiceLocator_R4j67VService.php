<?php

namespace ContainerJ0x3r7g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R4j67VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.r4j67_v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.r4j67_v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'typebac' => ['privates', '.errored.j2iPxal', NULL, 'Cannot determine controller argument for "App\\Controller\\Parametre\\TypeBacController::update()": the $typebac argument is type-hinted with the non-existent class or interface: "App\\Entity\\XTypeBac".'],
        ], [
            'typebac' => '?',
        ]);
    }
}
