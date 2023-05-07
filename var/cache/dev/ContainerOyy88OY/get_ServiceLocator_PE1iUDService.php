<?php

namespace ContainerOyy88OY;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PE1iUDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PE1iU_d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PE1iU_d'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AccueilShopController::index' => ['privates', '.service_locator.hvKzUl4', 'get_ServiceLocator_HvKzUl4Service', true],
            'App\\Controller\\AccueilShopController::produitDetail' => ['privates', '.service_locator.iGUm1r8', 'get_ServiceLocator_IGUm1r8Service', true],
            'App\\Controller\\AdminController::ajouterProduit' => ['privates', '.service_locator.FcXzdKM', 'get_ServiceLocator_FcXzdKMService', true],
            'App\\Controller\\AdminController::modifierStockAdmin' => ['privates', '.service_locator.Vq5yBlp', 'get_ServiceLocator_Vq5yBlpService', true],
            'App\\Controller\\AdminController::pageAdmin' => ['privates', '.service_locator.hvKzUl4', 'get_ServiceLocator_HvKzUl4Service', true],
            'App\\Controller\\AdminController::produitAdminDetail' => ['privates', '.service_locator.iGUm1r8', 'get_ServiceLocator_IGUm1r8Service', true],
            'App\\Controller\\AdminController::produitAdminSupprimer' => ['privates', '.service_locator._TnEEkc', 'get_ServiceLocator_TnEEkcService', true],
            'App\\Controller\\PanierController::validerCommande' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProfilController::profil' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\SecurityController::apiAdminLogin' => ['privates', '.service_locator.diAfL4J', 'get_ServiceLocator_DiAfL4JService', true],
            'App\\Controller\\SecurityController::apiLogin' => ['privates', '.service_locator.RAsJug5', 'get_ServiceLocator_RAsJug5Service', true],
            'App\\Controller\\SecurityController::inscription' => ['privates', '.service_locator.wU7gDXT', 'get_ServiceLocator_WU7gDXTService', true],
            'App\\Controller\\SecurityController::modifierStock' => ['privates', '.service_locator.Vq5yBlp', 'get_ServiceLocator_Vq5yBlpService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AccueilShopController:index' => ['privates', '.service_locator.hvKzUl4', 'get_ServiceLocator_HvKzUl4Service', true],
            'App\\Controller\\AccueilShopController:produitDetail' => ['privates', '.service_locator.iGUm1r8', 'get_ServiceLocator_IGUm1r8Service', true],
            'App\\Controller\\AdminController:ajouterProduit' => ['privates', '.service_locator.FcXzdKM', 'get_ServiceLocator_FcXzdKMService', true],
            'App\\Controller\\AdminController:modifierStockAdmin' => ['privates', '.service_locator.Vq5yBlp', 'get_ServiceLocator_Vq5yBlpService', true],
            'App\\Controller\\AdminController:pageAdmin' => ['privates', '.service_locator.hvKzUl4', 'get_ServiceLocator_HvKzUl4Service', true],
            'App\\Controller\\AdminController:produitAdminDetail' => ['privates', '.service_locator.iGUm1r8', 'get_ServiceLocator_IGUm1r8Service', true],
            'App\\Controller\\AdminController:produitAdminSupprimer' => ['privates', '.service_locator._TnEEkc', 'get_ServiceLocator_TnEEkcService', true],
            'App\\Controller\\PanierController:validerCommande' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProfilController:profil' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\SecurityController:apiAdminLogin' => ['privates', '.service_locator.diAfL4J', 'get_ServiceLocator_DiAfL4JService', true],
            'App\\Controller\\SecurityController:apiLogin' => ['privates', '.service_locator.RAsJug5', 'get_ServiceLocator_RAsJug5Service', true],
            'App\\Controller\\SecurityController:inscription' => ['privates', '.service_locator.wU7gDXT', 'get_ServiceLocator_WU7gDXTService', true],
            'App\\Controller\\SecurityController:modifierStock' => ['privates', '.service_locator.Vq5yBlp', 'get_ServiceLocator_Vq5yBlpService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AccueilShopController::index' => '?',
            'App\\Controller\\AccueilShopController::produitDetail' => '?',
            'App\\Controller\\AdminController::ajouterProduit' => '?',
            'App\\Controller\\AdminController::modifierStockAdmin' => '?',
            'App\\Controller\\AdminController::pageAdmin' => '?',
            'App\\Controller\\AdminController::produitAdminDetail' => '?',
            'App\\Controller\\AdminController::produitAdminSupprimer' => '?',
            'App\\Controller\\PanierController::validerCommande' => '?',
            'App\\Controller\\ProfilController::profil' => '?',
            'App\\Controller\\SecurityController::apiAdminLogin' => '?',
            'App\\Controller\\SecurityController::apiLogin' => '?',
            'App\\Controller\\SecurityController::inscription' => '?',
            'App\\Controller\\SecurityController::modifierStock' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AccueilShopController:index' => '?',
            'App\\Controller\\AccueilShopController:produitDetail' => '?',
            'App\\Controller\\AdminController:ajouterProduit' => '?',
            'App\\Controller\\AdminController:modifierStockAdmin' => '?',
            'App\\Controller\\AdminController:pageAdmin' => '?',
            'App\\Controller\\AdminController:produitAdminDetail' => '?',
            'App\\Controller\\AdminController:produitAdminSupprimer' => '?',
            'App\\Controller\\PanierController:validerCommande' => '?',
            'App\\Controller\\ProfilController:profil' => '?',
            'App\\Controller\\SecurityController:apiAdminLogin' => '?',
            'App\\Controller\\SecurityController:apiLogin' => '?',
            'App\\Controller\\SecurityController:inscription' => '?',
            'App\\Controller\\SecurityController:modifierStock' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}