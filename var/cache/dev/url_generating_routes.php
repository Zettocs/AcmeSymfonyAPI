<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'accueil_shop' => [[], ['_controller' => 'App\\Controller\\AccueilShopController::index'], [], [['text', '/shop']], [], [], []],
    'produit_detail' => [['id'], ['_controller' => 'App\\Controller\\AccueilShopController::produitDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_homepage' => [[], ['_controller' => 'App\\Controller\\AcmeController::homepage'], [], [['text', '/']], [], [], []],
    'produit_admin_detail' => [['id'], ['_controller' => 'App\\Controller\\AdminController::produitAdminDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit-admin']], [], [], []],
    'modifier_stock_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::modifierStockAdmin'], [], [['text', '/modifier-stock-admin']], [], [], []],
    'produit_admin_supprimer' => [['id'], ['_controller' => 'App\\Controller\\AdminController::produitAdminSupprimer'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produit-admin']], [], [], []],
    'ajout_produit' => [[], ['_controller' => 'App\\Controller\\AdminController::ajouterProduit'], [], [['text', '/ajout_produit']], [], [], []],
    'admin_historique' => [[], ['_controller' => 'App\\Controller\\AdminController::getAllCommandes'], [], [['text', '/admin_historique']], [], [], []],
    'modifier_statut' => [['id'], ['_controller' => 'App\\Controller\\AdminController::modifierStatut'], [], [['text', '/modifier_statut'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin_historique']], [], [], []],
    'panier' => [[], ['_controller' => 'App\\Controller\\PanierController::index'], [], [['text', '/panier']], [], [], []],
    'valider_commande' => [[], ['_controller' => 'App\\Controller\\PanierController::validerCommande'], [], [['text', '/valider-commande']], [], [], []],
    'panier_supprimer' => [['index'], ['_controller' => 'App\\Controller\\PanierController::supprimer'], [], [['variable', '/', '[^/]++', 'index', true], ['text', '/panier/supprimer']], [], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\ProfilController::profil'], [], [['text', '/profil/']], [], [], []],
    'historique' => [[], ['_controller' => 'App\\Controller\\ProfilController::getUserHistoCommandes'], [], [['text', '/profil/historique']], [], [], []],
    'modifier_profil' => [[], ['_controller' => 'App\\Controller\\ProfilController::modifierProfil'], [], [['text', '/profil/modifier']], [], [], []],
    'security_inscription' => [[], ['_controller' => 'App\\Controller\\SecurityController::inscription'], [], [['text', '/inscription']], [], [], []],
    'security_connexion' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'security_deconnexion' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'security_api_connexion' => [[], ['_controller' => 'App\\Controller\\SecurityController::apiLogin'], [], [['text', '/api/connexion']], [], [], []],
    'security_api_deconnexion' => [[], ['_controller' => 'App\\Controller\\SecurityController::apiLogout'], [], [['text', '/api/deconnexion']], [], [], []],
    'modifier_stock' => [[], ['_controller' => 'App\\Controller\\SecurityController::modifierStock'], [], [['text', '/api/modifier-stock']], [], [], []],
    'app_security_gethistocommandes' => [['id'], ['_controller' => 'App\\Controller\\SecurityController::getHistoCommandes'], [], [['variable', '', '[^/]++', 'id', true], ['text', '/api/commandes']], [], [], []],
    'app_security_getallcommandes' => [[], ['_controller' => 'App\\Controller\\SecurityController::getAllCommandes'], [], [['text', '/api/historique_commande']], [], [], []],
    'app_security_getutilisateur' => [['id'], ['_controller' => 'App\\Controller\\SecurityController::getUtilisateur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/utilisateur']], [], [], []],
    'get_ligne_commande' => [['id'], ['_controller' => 'App\\Controller\\SecurityController::getHistoCommandesByUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/commande_user']], [], [], []],
    'api_produits' => [[], ['_controller' => 'App\\Controller\\SecurityController::getProduits'], [], [['text', '/api/produits']], [], [], []],
    'page_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::pageAdmin'], ['_security' => 'is_granted("ROLE_ADMIN")'], [['text', '/page-admin']], [], [], []],
];
