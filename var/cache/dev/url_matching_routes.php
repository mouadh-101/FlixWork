<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/answers' => [[['_route' => 'showAllanswers', '_controller' => 'App\\Controller\\AnswerController::showAllAnswers'], null, null, null, false, false, null]],
        '/answer' => [[['_route' => 'app_answer', '_controller' => 'App\\Controller\\AnswerController::index'], null, null, null, false, false, null]],
        '/claims' => [[['_route' => 'showAllClaims', '_controller' => 'App\\Controller\\ClaimController::showAllClaims'], null, null, null, false, false, null]],
        '/claim' => [[['_route' => 'app_claim', '_controller' => 'App\\Controller\\ClaimController::index'], null, null, null, false, false, null]],
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
                .'|/answer(?'
                    .'|s/([^/]++)/(?'
                        .'|([^/]++)/new(*:43)'
                        .'|delete(*:56)'
                        .'|edit(*:67)'
                    .')'
                    .'|/([^/]++)(*:84)'
                .')'
                .'|/claim(?'
                    .'|s/([^/]++)/(?'
                        .'|new(*:118)'
                        .'|delete(*:132)'
                    .')'
                    .'|/([^/]++)(?'
                        .'|(*:153)'
                        .'|/edit(*:166)'
                    .')'
                .')'
                .'|/postulation(?'
                    .'|/([^/]++)(?'
                        .'|/([^/]++)(*:212)'
                        .'|(*:220)'
                    .')'
                    .'|list/([^/]++)(*:242)'
                .')'
                .'|/deletepost/([^/]++)(*:271)'
                .'|/updatepost/([^/]++)(*:299)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:338)'
                    .'|wdt/([^/]++)(*:358)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:404)'
                            .'|router(*:418)'
                            .'|exception(?'
                                .'|(*:438)'
                                .'|\\.css(*:451)'
                            .')'
                        .')'
                        .'|(*:461)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'addanswer', '_controller' => 'App\\Controller\\AnswerController::new'], ['id', 'id_c'], null, null, false, false, null]],
        56 => [[['_route' => 'deleteAnswer', '_controller' => 'App\\Controller\\AnswerController::deleteanswer'], ['id'], null, null, false, false, null]],
        67 => [[['_route' => 'editAnswer', '_controller' => 'App\\Controller\\AnswerController::editAnswer'], ['id'], null, null, false, false, null]],
        84 => [[['_route' => 'showanswer', '_controller' => 'App\\Controller\\AnswerController::show'], ['id'], null, null, false, true, null]],
        118 => [[['_route' => 'addClaim', '_controller' => 'App\\Controller\\ClaimController::new'], ['id'], null, null, false, false, null]],
        132 => [[['_route' => 'deleteClaim', '_controller' => 'App\\Controller\\ClaimController::deleteClaim'], ['id'], null, null, false, false, null]],
        153 => [[['_route' => 'showClaim', '_controller' => 'App\\Controller\\ClaimController::show'], ['id'], null, null, false, true, null]],
        166 => [[['_route' => 'editClaim', '_controller' => 'App\\Controller\\ClaimController::editClaim'], ['id'], null, null, false, false, null]],
        212 => [[['_route' => 'postulate', '_controller' => 'App\\Controller\\PostulationController::addPostulation'], ['idFreelancer', 'idJob'], null, null, false, true, null]],
        220 => [[['_route' => 'showpost', '_controller' => 'App\\Controller\\PostulationController::showPost'], ['id'], null, null, false, true, null]],
        242 => [[['_route' => 'list_postulation', '_controller' => 'App\\Controller\\PostulationController::list'], ['id'], null, null, false, true, null]],
        271 => [[['_route' => 'deletepost', '_controller' => 'App\\Controller\\PostulationController::deletePostulation'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'updatepost', '_controller' => 'App\\Controller\\PostulationController::updatepost'], ['id'], null, null, false, true, null]],
        338 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        358 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        404 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        418 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        438 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        451 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        461 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
