<?php

namespace ContainerASWNQjV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8j0O2gCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8j0O2gC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8j0O2gC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'panierRepository' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
            'promoRepository' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
        ], [
            'entityManager' => '?',
            'panierRepository' => 'App\\Repository\\PanierRepository',
            'promoRepository' => 'App\\Repository\\PromoRepository',
        ]);
    }
}
