<?php

namespace ContainerOxEDHgz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nj_ZBWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Nj.z_bW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Nj.z_bW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AccueilController::index' => ['privates', '.service_locator.czOFGB2', 'get_ServiceLocator_CzOFGB2Service', true],
            'App\\Controller\\AdminproductsController::deleteProduct' => ['privates', '.service_locator.cPzBaXc', 'get_ServiceLocator_CPzBaXcService', true],
            'App\\Controller\\AdminproductsController::deleteProducts' => ['privates', '.service_locator.czOFGB2', 'get_ServiceLocator_CzOFGB2Service', true],
            'App\\Controller\\AdminproductsController::editProduct' => ['privates', '.service_locator.hAIPoGV', 'get_ServiceLocator_HAIPoGVService', true],
            'App\\Controller\\AdminproductsController::editProductForm' => ['privates', '.service_locator.cPzBaXc', 'get_ServiceLocator_CPzBaXcService', true],
            'App\\Controller\\AdminproductsController::index' => ['privates', '.service_locator.czOFGB2', 'get_ServiceLocator_CzOFGB2Service', true],
            'App\\Controller\\AdminproductsController::updateProducts' => ['privates', '.service_locator.czOFGB2', 'get_ServiceLocator_CzOFGB2Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.jpvOrpT', 'get_ServiceLocator_JpvOrpTService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UservueController::addToCart' => ['privates', '.service_locator.cPzBaXc', 'get_ServiceLocator_CPzBaXcService', true],
            'App\\Controller\\UservueController::index' => ['privates', '.service_locator.czOFGB2', 'get_ServiceLocator_CzOFGB2Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AccueilController:index' => ['privates', '.service_locator.czOFGB2', 'get_ServiceLocator_CzOFGB2Service', true],
            'App\\Controller\\AdminproductsController:deleteProduct' => ['privates', '.service_locator.cPzBaXc', 'get_ServiceLocator_CPzBaXcService', true],
            'App\\Controller\\AdminproductsController:deleteProducts' => ['privates', '.service_locator.czOFGB2', 'get_ServiceLocator_CzOFGB2Service', true],
            'App\\Controller\\AdminproductsController:editProduct' => ['privates', '.service_locator.hAIPoGV', 'get_ServiceLocator_HAIPoGVService', true],
            'App\\Controller\\AdminproductsController:editProductForm' => ['privates', '.service_locator.cPzBaXc', 'get_ServiceLocator_CPzBaXcService', true],
            'App\\Controller\\AdminproductsController:index' => ['privates', '.service_locator.czOFGB2', 'get_ServiceLocator_CzOFGB2Service', true],
            'App\\Controller\\AdminproductsController:updateProducts' => ['privates', '.service_locator.czOFGB2', 'get_ServiceLocator_CzOFGB2Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.jpvOrpT', 'get_ServiceLocator_JpvOrpTService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UservueController:addToCart' => ['privates', '.service_locator.cPzBaXc', 'get_ServiceLocator_CPzBaXcService', true],
            'App\\Controller\\UservueController:index' => ['privates', '.service_locator.czOFGB2', 'get_ServiceLocator_CzOFGB2Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AccueilController::index' => '?',
            'App\\Controller\\AdminproductsController::deleteProduct' => '?',
            'App\\Controller\\AdminproductsController::deleteProducts' => '?',
            'App\\Controller\\AdminproductsController::editProduct' => '?',
            'App\\Controller\\AdminproductsController::editProductForm' => '?',
            'App\\Controller\\AdminproductsController::index' => '?',
            'App\\Controller\\AdminproductsController::updateProducts' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UservueController::addToCart' => '?',
            'App\\Controller\\UservueController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AccueilController:index' => '?',
            'App\\Controller\\AdminproductsController:deleteProduct' => '?',
            'App\\Controller\\AdminproductsController:deleteProducts' => '?',
            'App\\Controller\\AdminproductsController:editProduct' => '?',
            'App\\Controller\\AdminproductsController:editProductForm' => '?',
            'App\\Controller\\AdminproductsController:index' => '?',
            'App\\Controller\\AdminproductsController:updateProducts' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UservueController:addToCart' => '?',
            'App\\Controller\\UservueController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}