<?php

namespace ContainerRxCszxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EULgxcgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EULgxcg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EULgxcg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'seriebac' => ['privates', '.errored.65V4PA0', NULL, 'Cannot determine controller argument for "App\\Controller\\Parametre\\SerieBacController::delete()": the $seriebac argument is type-hinted with the non-existent class or interface: "App\\Entity\\XSerieBac".'],
        ], [
            'seriebac' => '?',
        ]);
    }
}
