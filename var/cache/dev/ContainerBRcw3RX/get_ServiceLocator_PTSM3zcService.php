<?php

namespace ContainerBRcw3RX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PTSM3zcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pTSM3zc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pTSM3zc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AccueilShopController::index' => ['privates', '.service_locator.6XxFdB9', 'get_ServiceLocator_6XxFdB9Service', true],
            'App\\Controller\\AccueilShopController::produitDetail' => ['privates', '.service_locator.iGUm1r8', 'get_ServiceLocator_IGUm1r8Service', true],
            'App\\Controller\\SecurityController::apiLogin' => ['privates', '.service_locator.RAsJug5', 'get_ServiceLocator_RAsJug5Service', true],
            'App\\Controller\\SecurityController::inscription' => ['privates', '.service_locator.wU7gDXT', 'get_ServiceLocator_WU7gDXTService', true],
            'App\\Controller\\SecurityController::logout' => ['privates', '.service_locator.sG4AWsU', 'get_ServiceLocator_SG4AWsUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AccueilShopController:index' => ['privates', '.service_locator.6XxFdB9', 'get_ServiceLocator_6XxFdB9Service', true],
            'App\\Controller\\AccueilShopController:produitDetail' => ['privates', '.service_locator.iGUm1r8', 'get_ServiceLocator_IGUm1r8Service', true],
            'App\\Controller\\SecurityController:apiLogin' => ['privates', '.service_locator.RAsJug5', 'get_ServiceLocator_RAsJug5Service', true],
            'App\\Controller\\SecurityController:inscription' => ['privates', '.service_locator.wU7gDXT', 'get_ServiceLocator_WU7gDXTService', true],
            'App\\Controller\\SecurityController:logout' => ['privates', '.service_locator.sG4AWsU', 'get_ServiceLocator_SG4AWsUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AccueilShopController::index' => '?',
            'App\\Controller\\AccueilShopController::produitDetail' => '?',
            'App\\Controller\\SecurityController::apiLogin' => '?',
            'App\\Controller\\SecurityController::inscription' => '?',
            'App\\Controller\\SecurityController::logout' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AccueilShopController:index' => '?',
            'App\\Controller\\AccueilShopController:produitDetail' => '?',
            'App\\Controller\\SecurityController:apiLogin' => '?',
            'App\\Controller\\SecurityController:inscription' => '?',
            'App\\Controller\\SecurityController:logout' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
