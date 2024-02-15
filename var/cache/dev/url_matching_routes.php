<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/interview' => [[['_route' => 'app_interview', '_controller' => 'App\\Controller\\InterviewController::index'], null, null, null, false, false, null]],
        '/jobs' => [[['_route' => 'list_jobs', '_controller' => 'App\\Controller\\JobsController::list'], null, null, null, false, false, null]],
        '/postulation' => [[['_route' => 'app_postulation', '_controller' => 'App\\Controller\\PostulationController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/interview(?'
                    .'|/(?'
                        .'|new/([^/]++)/([^/]++)(*:45)'
                        .'|details/([^/]++)/([^/]++)(*:77)'
                    .')'
                    .'|list/([^/]++)(*:98)'
                .')'
                .'|/delete(?'
                    .'|interview/([^/]++)/([^/]++)(*:143)'
                    .'|post/([^/]++)/([^/]++)(*:173)'
                .')'
                .'|/update(?'
                    .'|interview/([^/]++)/([^/]++)(*:219)'
                    .'|post/([^/]++)/([^/]++)(*:249)'
                .')'
                .'|/postulation(?'
                    .'|/(?'
                        .'|new/([^/]++)/([^/]++)(*:298)'
                        .'|([^/]++)/([^/]++)(*:323)'
                    .')'
                    .'|list/([^/]++)(*:345)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:385)'
                    .'|wdt/([^/]++)(*:405)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:451)'
                            .'|router(*:465)'
                            .'|exception(?'
                                .'|(*:485)'
                                .'|\\.css(*:498)'
                            .')'
                        .')'
                        .'|(*:508)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'addInterview', '_controller' => 'App\\Controller\\InterviewController::addInterview'], ['id_r', 'id_f'], null, null, false, true, null]],
        77 => [[['_route' => 'showinterview', '_controller' => 'App\\Controller\\InterviewController::showPost'], ['id_u', 'id_i'], null, null, false, true, null]],
        98 => [[['_route' => 'list_interview', '_controller' => 'App\\Controller\\InterviewController::list'], ['id'], null, null, false, true, null]],
        143 => [[['_route' => 'deleteinterview', '_controller' => 'App\\Controller\\InterviewController::deleteInterview'], ['id_u', 'id_i'], null, null, false, true, null]],
        173 => [[['_route' => 'deletepost', '_controller' => 'App\\Controller\\PostulationController::deletePostulation'], ['id_u', 'id_p'], null, null, false, true, null]],
        219 => [[['_route' => 'updateinterview', '_controller' => 'App\\Controller\\InterviewController::updateinterview'], ['id_u', 'id_i'], null, null, false, true, null]],
        249 => [[['_route' => 'updatepost', '_controller' => 'App\\Controller\\PostulationController::updatepost'], ['id_u', 'id_p'], null, null, false, true, null]],
        298 => [[['_route' => 'postulate', '_controller' => 'App\\Controller\\PostulationController::addPostulation'], ['idFreelancer', 'idJob'], null, null, false, true, null]],
        323 => [[['_route' => 'showpost', '_controller' => 'App\\Controller\\PostulationController::showPost'], ['id_u', 'id_p'], null, null, false, true, null]],
        345 => [[['_route' => 'list_postulation', '_controller' => 'App\\Controller\\PostulationController::list'], ['id'], null, null, false, true, null]],
        385 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        405 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        451 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        465 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        485 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        498 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        508 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
