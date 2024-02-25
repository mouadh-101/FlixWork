<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/answer' => [[['_route' => 'app_answer', '_controller' => 'App\\Controller\\AnswerController::index'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|ddAnswer/([^/]++)/([^/]++)(*:38)'
                    .'|nswer(?'
                        .'|/([^/]++)/([^/]++)(*:71)'
                        .'|s/([^/]++)(*:88)'
                    .')'
                .')'
                .'|/delete(?'
                    .'|Answer/([^/]++)/([^/]++)(*:131)'
                    .'|claim/([^/]++)/([^/]++)(*:162)'
                    .'|post/([^/]++)(*:183)'
                .')'
                .'|/edit(?'
                    .'|Answer/([^/]++)/([^/]++)(*:224)'
                    .'|claim/([^/]++)/([^/]++)(*:255)'
                .')'
                .'|/claim(?'
                    .'|New/([^/]++)(*:285)'
                    .'|/([^/]++)/([^/]++)(*:311)'
                    .'|s/([^/]++)(*:329)'
                .')'
                .'|/postulation(?'
                    .'|/([^/]++)(?'
                        .'|/([^/]++)(*:374)'
                        .'|(*:382)'
                    .')'
                    .'|list/([^/]++)(*:404)'
                .')'
                .'|/updatepost/([^/]++)(*:433)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:472)'
                    .'|wdt/([^/]++)(*:492)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:538)'
                            .'|router(*:552)'
                            .'|exception(?'
                                .'|(*:572)'
                                .'|\\.css(*:585)'
                            .')'
                        .')'
                        .'|(*:595)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'addanswer', '_controller' => 'App\\Controller\\AnswerController::new'], ['id_u', 'id_c'], null, null, false, true, null]],
        71 => [[['_route' => 'showanswer', '_controller' => 'App\\Controller\\AnswerController::show'], ['id_u', 'id_a'], null, null, false, true, null]],
        88 => [[['_route' => 'showAllanswers', '_controller' => 'App\\Controller\\AnswerController::showAllAnswers'], ['id_u'], null, null, false, true, null]],
        131 => [[['_route' => 'deleteAnswer', '_controller' => 'App\\Controller\\AnswerController::deleteanswer'], ['id_u', 'id_a'], null, null, false, true, null]],
        162 => [[['_route' => 'deleteClaim', '_controller' => 'App\\Controller\\ClaimController::deleteClaim'], ['id_u', 'id'], null, null, false, true, null]],
        183 => [[['_route' => 'deletepost', '_controller' => 'App\\Controller\\PostulationController::deletePostulation'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => 'editAnswer', '_controller' => 'App\\Controller\\AnswerController::editAnswer'], ['id_u', 'id_a'], null, null, false, true, null]],
        255 => [[['_route' => 'editClaim', '_controller' => 'App\\Controller\\ClaimController::editClaim'], ['id_u', 'id_c'], null, null, false, true, null]],
        285 => [[['_route' => 'addClaim', '_controller' => 'App\\Controller\\ClaimController::new'], ['id'], null, null, false, true, null]],
        311 => [[['_route' => 'showClaim', '_controller' => 'App\\Controller\\ClaimController::show'], ['id_u', 'id'], null, null, false, true, null]],
        329 => [[['_route' => 'showAllClaims', '_controller' => 'App\\Controller\\ClaimController::showAllClaims'], ['id_u'], null, null, false, true, null]],
        374 => [[['_route' => 'postulate', '_controller' => 'App\\Controller\\PostulationController::addPostulation'], ['idFreelancer', 'idJob'], null, null, false, true, null]],
        382 => [[['_route' => 'showpost', '_controller' => 'App\\Controller\\PostulationController::showPost'], ['id'], null, null, false, true, null]],
        404 => [[['_route' => 'list_postulation', '_controller' => 'App\\Controller\\PostulationController::list'], ['id'], null, null, false, true, null]],
        433 => [[['_route' => 'updatepost', '_controller' => 'App\\Controller\\PostulationController::updatepost'], ['id'], null, null, false, true, null]],
        472 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        492 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        538 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        552 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        572 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        585 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        595 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
