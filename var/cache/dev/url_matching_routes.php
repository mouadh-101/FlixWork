<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'display_admin', '_controller' => 'App\\Controller\\UserController::indexAdmin'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'display_client', '_controller' => 'App\\Controller\\UserController::indexClient'], null, null, null, false, false, null]],
        '/adduser' => [
            [['_route' => 'adduser', '_controller' => 'App\\Controller\\UserController::adduser'], null, null, null, false, false, null],
            [['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::adduser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/app_user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::app_user'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/deleteUser/([^/]++)(*:27)'
                .'|/modifuser/([^/]++)(*:53)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:91)'
                    .'|wdt/([^/]++)(*:110)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:156)'
                            .'|router(*:170)'
                            .'|exception(?'
                                .'|(*:190)'
                                .'|\\.css(*:203)'
                            .')'
                        .')'
                        .'|(*:213)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'supp_user', '_controller' => 'App\\Controller\\UserController::suppressionUser'], ['id'], null, null, false, true, null]],
        53 => [[['_route' => 'modifuser', '_controller' => 'App\\Controller\\UserController::modifuser'], ['id'], null, null, false, true, null]],
        91 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        110 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        156 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        190 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        203 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        213 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
