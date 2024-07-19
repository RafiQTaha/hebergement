<?php

namespace ContainerK5mLabM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KdQC4yGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KdQC4yG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KdQC4yG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'inscription' => ['privates', '.errored..service_locator.KdQC4yG.App\\Entity\\TInscription', NULL, 'Cannot autowire service ".service_locator.KdQC4yG": it references class "App\\Entity\\TInscription" but no such service exists.'],
        ], [
            'inscription' => 'App\\Entity\\TInscription',
        ]);
    }
}