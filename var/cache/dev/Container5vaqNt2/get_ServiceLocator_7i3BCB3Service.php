<?php

namespace Container5vaqNt2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7i3BCB3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7i3BCB3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7i3BCB3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'loyaltyCardRepository' => ['privates', 'App\\Repository\\LoyaltyCardRepository', 'getLoyaltyCardRepositoryService', true],
        ], [
            'loyaltyCardRepository' => 'App\\Repository\\LoyaltyCardRepository',
        ]);
    }
}
