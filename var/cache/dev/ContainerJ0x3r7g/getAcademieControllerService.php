<?php

namespace ContainerJ0x3r7g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAcademieControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Parametre\AcademieController' shared autowired service.
     *
     * @return \App\Controller\Parametre\AcademieController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Parametre'.\DIRECTORY_SEPARATOR.'AcademieController.php';

        $container->services['App\\Controller\\Parametre\\AcademieController'] = $instance = new \App\Controller\Parametre\AcademieController(($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\Parametre\\AcademieController', $container));

        return $instance;
    }
}
