<?php

namespace ContainerMaViTZX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.cPzBaXc.App\Entity\Products' shared service.
     *
     * @return \App\Entity\Products
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.cPzBaXc": it needs an instance of "App\\Entity\\Products" but this type has been excluded in "config/services.yaml".');
    }
}
