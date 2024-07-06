<?php

namespace ContainerRxCszxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSallesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Parametre\SallesController' shared autowired service.
     *
     * @return \App\Controller\Parametre\SallesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Parametre'.\DIRECTORY_SEPARATOR.'SallesController.php';

        $container->services['App\\Controller\\Parametre\\SallesController'] = $instance = new \App\Controller\Parametre\SallesController(($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\Parametre\\SallesController', $container));

        return $instance;
    }
}
