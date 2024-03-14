<?php

namespace ContainerMaViTZX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HAIPoGVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hAIPoGV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hAIPoGV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'filesystem' => ['privates', 'filesystem', 'getFilesystemService', true],
            'product' => ['privates', '.errored..service_locator.hAIPoGV.App\\Entity\\Products', NULL, 'Cannot autowire service ".service_locator.hAIPoGV": it needs an instance of "App\\Entity\\Products" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'filesystem' => '?',
            'product' => 'App\\Entity\\Products',
        ]);
    }
}
