<?php

namespace ContainerRxCszxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SPYgwvHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sPYgwvH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sPYgwvH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'module' => ['privates', '.errored.UsV8_Ok', NULL, 'Cannot determine controller argument for "App\\Controller\\Parametre\\ModuleController::delete()": the $module argument is type-hinted with the non-existent class or interface: "App\\Entity\\AcModule".'],
        ], [
            'module' => '?',
        ]);
    }
}
