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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/currency' => [[['_route' => 'app_admin_currency', '_controller' => 'App\\Controller\\AdminController::currency'], null, null, null, false, false, null]],
        '/admin/platforms' => [[['_route' => 'app_admin_platform', '_controller' => 'App\\Controller\\AdminController::platforms'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_admin_user', '_controller' => 'App\\Controller\\AdminController::users'], null, null, null, false, false, null]],
        '/admin/logs' => [[['_route' => 'app_admin_logs', '_controller' => 'App\\Controller\\AdminController::logs'], null, null, null, false, false, null]],
        '/portfolio/getAllCryptos' => [[['_route' => 'app_get_all_cryptos', '_controller' => 'App\\Controller\\AjaxController::getAllCryptos'], null, ['POST' => 0], null, false, false, null]],
        '/portfolio/getCryptosByPlatform' => [[['_route' => 'app_get_cryptos_by_platform', '_controller' => 'App\\Controller\\AjaxController::getCryptosByPlatform'], null, ['POST' => 0], null, false, false, null]],
        '/portfolio/sortCryptosAssets' => [[['_route' => 'app_sort_cryptos_assets', '_controller' => 'App\\Controller\\AjaxController::sortCryptosAssets'], null, ['POST' => 0], null, false, false, null]],
        '/portfolio/getCurrency' => [[['_route' => 'app_get_currency', '_controller' => 'App\\Controller\\AjaxController::getCurrency'], null, ['POST' => 0], null, false, false, null]],
        '/portfolio/setCurrency' => [[['_route' => 'app_set_currency', '_controller' => 'App\\Controller\\AjaxController::setCurrency'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/help' => [[['_route' => 'app_help', '_controller' => 'App\\Controller\\HomeController::help'], null, null, null, false, false, null]],
        '/legal-notice' => [[['_route' => 'app_legal_notice', '_controller' => 'App\\Controller\\HomeController::legalNotice'], null, null, null, false, false, null]],
        '/lexicon' => [[['_route' => 'app_lexicon', '_controller' => 'App\\Controller\\HomeController::lexicon'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\UserController::account'], null, null, null, false, false, null]],
        '/account/get-platforms' => [[['_route' => 'app_account_get_platforms', '_controller' => 'App\\Controller\\UserController::getPlatforms'], null, ['POST' => 0], null, false, false, null]],
        '/account/edit-platform' => [[['_route' => 'app_account_edit_platform', '_controller' => 'App\\Controller\\UserController::editPlatform'], null, ['POST' => 0], null, false, false, null]],
        '/account/delete-platform' => [[['_route' => 'app_account_delete_platform', '_controller' => 'App\\Controller\\UserController::deletePlatform'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/portfolio(?:/([^/]++))?(*:192)'
                .'|/translations(?:/([\\w]+)(?:\\.(js|json))?)?(*:242)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        192 => [[['_route' => 'app_portfolio', 'assets' => null, '_controller' => 'App\\Controller\\PanelController::portfolio'], ['assets'], null, null, false, true, null]],
        242 => [
            [['_route' => 'bazinga_jstranslation_js', '_controller' => 'bazinga.jstranslation.controller::getTranslationsAction', 'domain' => 'messages', '_format' => 'js'], ['domain', '_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
