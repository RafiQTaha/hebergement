<?php

namespace ContainerEvlLe2M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_12IXlNfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.12IXlNf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.12IXlNf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'programmation' => ['privates', '.errored.n40.zRg', NULL, 'Cannot determine controller argument for "App\\Controller\\Parametre\\ProgrammationController::update()": the $programmation argument is type-hinted with the non-existent class or interface: "App\\Entity\\PrProgrammation".'],
        ], [
            'programmation' => '?',
        ]);
    }
}
