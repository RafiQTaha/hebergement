<?php

namespace ContainerK5mLabM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGestionFactureControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Facture\GestionFactureController' shared autowired service.
     *
     * @return \App\Controller\Facture\GestionFactureController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Facture'.\DIRECTORY_SEPARATOR.'GestionFactureController.php';

        $container->services['App\\Controller\\Facture\\GestionFactureController'] = $instance = new \App\Controller\Facture\GestionFactureController(($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\Facture\\GestionFactureController', $container));

        return $instance;
    }
}