<?php

namespace ContainerKDr00Wt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F7k_Hs6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F7k.hs6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F7k.hs6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'panierRepository' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
            'promoRepository' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
        ], [
            'panierRepository' => 'App\\Repository\\PanierRepository',
            'promoRepository' => 'App\\Repository\\PromoRepository',
        ]);
    }
}