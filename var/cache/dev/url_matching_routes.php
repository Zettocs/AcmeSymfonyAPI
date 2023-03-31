<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null],
            [['_route' => 'app_homepage', '_controller' => 'App\\Controller\\AcmeController::homepage'], null, null, null, false, false, null],
        ],
        '/shop' => [[['_route' => 'accueil_shop', '_controller' => 'App\\Controller\\AccueilShopController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\AcmeController::panier'], null, null, null, false, false, null]],
        '/confirmationPanier' => [[['_route' => 'confirmationPanier', '_controller' => 'App\\Controller\\AcmeController::confirmationPanier'], null, null, null, false, false, null]],
        '/api/connexion' => [[['_route' => 'security_api_connexion', '_controller' => 'App\\Controller\\SecurityController::apiLogin'], null, ['POST' => 0], null, false, false, null]],
        '/api/deconnexion' => [[['_route' => 'security_api_deconnexion', '_controller' => 'App\\Controller\\SecurityController::apiLogout'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/produit/([^/]++)(*:186)'
                .'|/(.+)(*:199)'
                .'|/api/(?'
                    .'|inscription(*:226)'
                    .'|connexion(*:243)'
                    .'|deconnexion(*:262)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => 'produit_detail', '_controller' => 'App\\Controller\\AccueilShopController::produitDetail'], ['id'], null, null, false, true, null]],
        199 => [[['_route' => 'not_found', '_controller' => 'App\\Controller\\ErrorController::showNotFound'], ['url'], null, null, false, true, null]],
        226 => [[['_route' => 'security_inscription', '_controller' => 'App\\Controller\\SecurityController::inscription'], [], ['POST' => 0], null, false, false, null]],
        243 => [[['_route' => 'security_connexion', '_controller' => 'App\\Controller\\SecurityController::login'], [], ['POST' => 0], null, false, false, null]],
        262 => [
            [['_route' => 'security_deconnexion', '_controller' => 'App\\Controller\\SecurityController::logout'], [], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
