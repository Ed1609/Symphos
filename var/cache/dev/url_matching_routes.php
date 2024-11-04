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
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/quantity' => [[['_route' => 'cart_quantity', '_controller' => 'App\\Controller\\CartController::countUserCartItems'], null, null, null, false, false, null]],
        '/form' => [[['_route' => 'register', '_controller' => 'App\\Controller\\FormulaireInscriptionController::createUser'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'Accueil', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\HomeController::admin'], null, null, null, false, false, null]],
        '/promotion' => [[['_route' => 'Duree.promo', '_controller' => 'App\\Controller\\HomeController::DureePromo'], null, null, null, false, false, null]],
        '/accesCookie' => [[['_route' => 'update.cookie', '_controller' => 'App\\Controller\\HomeController::cookies'], null, null, null, false, false, null]],
        '/calcul' => [[['_route' => 'Temps.promo', '_controller' => 'App\\Controller\\HomeController::calculerTempsRestant'], null, null, null, false, false, null]],
        '/livraison' => [[['_route' => 'livraison', '_controller' => 'App\\Controller\\LivraisonController::index'], null, ['POST' => 0], null, false, false, null]],
        '/navbar' => [[['_route' => 'app_navbar', '_controller' => 'App\\Controller\\NavbarController::navbar'], null, null, null, false, false, null]],
        '/payment_success' => [[['_route' => 'payment.success', '_controller' => 'App\\Controller\\PaymentController::success'], null, null, null, false, false, null]],
        '/payment_failure' => [[['_route' => 'payment.failure', '_controller' => 'App\\Controller\\PaymentController::failure'], null, null, null, false, false, null]],
        '/paiement' => [[['_route' => 'index.payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/page_introuvable' => [[['_route' => 'page.introuvable', '_controller' => 'App\\Controller\\PaymentController::pageIntrouvable'], null, null, null, false, false, null]],
        '/payment_process' => [[['_route' => 'process.payment', '_controller' => 'App\\Controller\\PaymentController::makePayment'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'l_ogin', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'user.contact', '_controller' => 'App\\Controller\\UserController::contact'], null, null, null, false, false, null]],
        '/walletpaie' => [[['_route' => 'app_walletpaie', '_controller' => 'App\\Controller\\WalletController::index'], null, null, null, false, false, null]],
        '/recharge' => [[['_route' => 'recharge.compte', '_controller' => 'App\\Controller\\WalletController::inde'], null, ['POST' => 0], null, false, false, null]],
        '/wallet' => [[['_route' => 'app.wallet', '_controller' => 'App\\Controller\\WalletController::collecteur'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/add\\-card/([^/]++)/([^/]++)/([^/]++)(*:239)'
                .'|/delete\\-product/([^/]++)(*:272)'
                .'|/category(?:/([a-zA-Z0-9\\-]+))?(*:311)'
                .'|/product/([a-zA-Z0-9\\-]+)\\-(\\d+)(*:351)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        239 => [[['_route' => 'add_card', '_controller' => 'App\\Controller\\CartController::addCard'], ['quantity', 'idUtilisateur', 'idProduit'], null, null, false, true, null]],
        272 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\CartController::deleteProduct'], ['id_produit'], ['POST' => 0], null, false, true, null]],
        311 => [[['_route' => 'all-product', 'category' => '', '_controller' => 'App\\Controller\\CategoryController::index'], ['category'], null, null, false, true, null]],
        351 => [
            [['_route' => 'product.show', '_controller' => 'App\\Controller\\ProductController::index'], ['slug', 'id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
