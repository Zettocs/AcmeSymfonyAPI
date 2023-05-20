<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null],
            [['_route' => 'app_homepage', '_controller' => 'App\\Controller\\AcmeController::homepage'], null, null, null, false, false, null],
        ],
        '/shop' => [[['_route' => 'accueil_shop', '_controller' => 'App\\Controller\\AccueilShopController::index'], null, null, null, false, false, null]],
        '/modifier-stock-admin' => [[['_route' => 'modifier_stock_admin', '_controller' => 'App\\Controller\\AdminController::modifierStockAdmin'], null, null, null, false, false, null]],
        '/ajout_produit' => [[['_route' => 'ajout_produit', '_controller' => 'App\\Controller\\AdminController::ajouterProduit'], null, null, null, false, false, null]],
        '/admin_historique' => [[['_route' => 'admin_historique', '_controller' => 'App\\Controller\\AdminController::getAllCommandes'], null, ['GET' => 0], null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/valider-commande' => [[['_route' => 'valider_commande', '_controller' => 'App\\Controller\\PanierController::validerCommande'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ProfilController::profil'], null, null, null, true, false, null]],
        '/profil/historique' => [[['_route' => 'historique', '_controller' => 'App\\Controller\\ProfilController::getUserHistoCommandes'], null, null, null, false, false, null]],
        '/profil/modifier' => [[['_route' => 'modifier_profil', '_controller' => 'App\\Controller\\ProfilController::modifierProfil'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_inscription', '_controller' => 'App\\Controller\\SecurityController::inscription'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_connexion', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_deconnexion', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/api/connexion' => [[['_route' => 'security_api_connexion', '_controller' => 'App\\Controller\\SecurityController::apiLogin'], null, ['POST' => 0], null, false, false, null]],
        '/api/deconnexion' => [[['_route' => 'security_api_deconnexion', '_controller' => 'App\\Controller\\SecurityController::apiLogout'], null, ['POST' => 0], null, false, false, null]],
        '/api/modifier-stock' => [[['_route' => 'modifier_stock', '_controller' => 'App\\Controller\\SecurityController::modifierStock'], null, ['POST' => 0], null, false, false, null]],
        '/api/historique_commande' => [[['_route' => 'app_security_getallcommandes', '_controller' => 'App\\Controller\\SecurityController::getAllCommandes'], null, ['GET' => 0], null, false, false, null]],
        '/api/produits' => [[['_route' => 'api_produits', '_controller' => 'App\\Controller\\SecurityController::getProduits'], null, ['GET' => 0], null, false, false, null]],
        '/page-admin' => [[['_route' => 'page_admin', '_controller' => 'App\\Controller\\AdminController::pageAdmin'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/p(?'
                    .'|roduit(?'
                        .'|/([^/]++)(*:30)'
                        .'|\\-admin/([^/]++)(?'
                            .'|(*:56)'
                            .'|/supprimer(*:73)'
                        .')'
                    .')'
                    .'|anier/supprimer/([^/]++)(*:106)'
                .')'
                .'|/a(?'
                    .'|dmin_historique/([^/]++)/modifier_statut(*:160)'
                    .'|pi/(?'
                        .'|commande(?'
                            .'|s([^/]++)(*:194)'
                            .'|_user/([^/]++)(*:216)'
                        .')'
                        .'|utilisateur/([^/]++)(*:245)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'produit_detail', '_controller' => 'App\\Controller\\AccueilShopController::produitDetail'], ['id'], null, null, false, true, null]],
        56 => [[['_route' => 'produit_admin_detail', '_controller' => 'App\\Controller\\AdminController::produitAdminDetail'], ['id'], null, null, false, true, null]],
        73 => [[['_route' => 'produit_admin_supprimer', '_controller' => 'App\\Controller\\AdminController::produitAdminSupprimer'], ['id'], null, null, false, false, null]],
        106 => [[['_route' => 'panier_supprimer', '_controller' => 'App\\Controller\\PanierController::supprimer'], ['index'], null, null, false, true, null]],
        160 => [[['_route' => 'modifier_statut', '_controller' => 'App\\Controller\\AdminController::modifierStatut'], ['id'], ['POST' => 0], null, false, false, null]],
        194 => [[['_route' => 'app_security_gethistocommandes', '_controller' => 'App\\Controller\\SecurityController::getHistoCommandes'], ['id'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'get_ligne_commande', '_controller' => 'App\\Controller\\SecurityController::getHistoCommandesByUser'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [
            [['_route' => 'app_security_getutilisateur', '_controller' => 'App\\Controller\\SecurityController::getUtilisateur'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
