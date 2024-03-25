<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\BaseController::contact'], null, null, null, false, false, null]],
        '/private-ajout' => [[['_route' => 'ajout', '_controller' => 'App\\Controller\\BaseController::ajout'], null, null, null, false, false, null]],
        '/mes-favorie' => [[['_route' => 'mes-favorie', '_controller' => 'App\\Controller\\BaseController::mesFavorie'], null, null, null, false, false, null]],
        '/monPanier' => [[['_route' => 'monPanier', '_controller' => 'App\\Controller\\BaseController::monPanier'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'faq', '_controller' => 'App\\Controller\\BaseController::faq'], null, null, null, false, false, null]],
        '/mentionslegales' => [[['_route' => 'mentionslegales', '_controller' => 'App\\Controller\\BaseController::mentionslegales'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\BaseController::cgu'], null, null, null, false, false, null]],
        '/charte' => [[['_route' => 'charte', '_controller' => 'App\\Controller\\BaseController::charte'], null, null, null, false, false, null]],
        '/private-ajoutDeGenre' => [[['_route' => 'ajoutDeGenre', '_controller' => 'App\\Controller\\BaseController::ajoutDeGenre'], null, null, null, false, false, null]],
        '/private-ajoutDeType' => [[['_route' => 'ajoutDeType', '_controller' => 'App\\Controller\\BaseController::ajoutDeType'], null, null, null, false, false, null]],
        '/BD' => [[['_route' => 'BD', '_controller' => 'App\\Controller\\BaseController::BD'], null, null, null, false, false, null]],
        '/roman' => [[['_route' => 'roman', '_controller' => 'App\\Controller\\BaseController::roman'], null, null, null, false, false, null]],
        '/classique' => [[['_route' => 'classique', '_controller' => 'App\\Controller\\BaseController::classique'], null, null, null, false, false, null]],
        '/manga' => [[['_route' => 'manga', '_controller' => 'App\\Controller\\BaseController::manga'], null, null, null, false, false, null]],
        '/mythe' => [[['_route' => 'mythe', '_controller' => 'App\\Controller\\BaseController::mythe'], null, null, null, false, false, null]],
        '/poesie' => [[['_route' => 'poesie', '_controller' => 'App\\Controller\\BaseController::poesie'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::rechercheLivre'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/fa(?'
                    .'|vorie/([^/]++)(*:27)'
                    .'|q/modifier/([^/]++)(*:53)'
                .')'
                .'|/detail/([^/]++)(*:77)'
                .'|/a(?'
                    .'|joutPanier/([^/]++)(*:108)'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:150)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:186)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:217)'
                            .'|contexts/([^.]+)(?:\\.(jsonld))?(*:256)'
                            .'|errors/([^/]++)(?'
                                .'|(*:282)'
                            .')'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:320)'
                            .')'
                            .'|genres(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:364)'
                                .'|(?:\\.([^/]++))?(*:387)'
                            .')'
                            .'|livres(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:431)'
                                .'|(?:\\.([^/]++))?(*:454)'
                            .')'
                            .'|paniers(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:499)'
                                .'|(?:\\.([^/]++))?(*:522)'
                            .')'
                            .'|types(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:565)'
                                .'|(?:\\.([^/]++))?(*:588)'
                            .')'
                            .'|users(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:631)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:657)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:692)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/supprimerPanier/([^/]++)(*:729)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:768)'
                    .'|wdt/([^/]++)(*:788)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:834)'
                            .'|router(*:848)'
                            .'|exception(?'
                                .'|(*:868)'
                                .'|\\.css(*:881)'
                            .')'
                        .')'
                        .'|(*:891)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'favorie', '_controller' => 'App\\Controller\\BaseController::favorie'], ['id'], null, null, false, true, null]],
        53 => [[['_route' => 'modifierFaq', '_controller' => 'App\\Controller\\BaseController::modifierFaq'], ['id'], null, null, false, true, null]],
        77 => [[['_route' => 'detail', '_controller' => 'App\\Controller\\BaseController::detail'], ['id'], null, null, false, true, null]],
        108 => [[['_route' => 'ajoutPanier', '_controller' => 'App\\Controller\\BaseController::ajoutPanier'], ['id'], null, null, false, true, null]],
        150 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        186 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        217 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        256 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        282 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        320 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        364 => [[['_route' => '_api_/genres/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Genre', '_api_operation_name' => '_api_/genres/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        387 => [[['_route' => '_api_/genres{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Genre', '_api_operation_name' => '_api_/genres{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        431 => [[['_route' => '_api_/livres/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Livre', '_api_operation_name' => '_api_/livres/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        454 => [[['_route' => '_api_/livres{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Livre', '_api_operation_name' => '_api_/livres{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        499 => [[['_route' => '_api_/paniers/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => '_api_/paniers{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Panier', '_api_operation_name' => '_api_/paniers{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        565 => [[['_route' => '_api_/types/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Type', '_api_operation_name' => '_api_/types/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        588 => [[['_route' => '_api_/types{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Type', '_api_operation_name' => '_api_/types{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        631 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        657 => [
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        692 => [[['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        729 => [[['_route' => 'supp-panier', '_controller' => 'App\\Controller\\BaseController::supprimerPanier'], ['id'], null, null, false, true, null]],
        768 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        788 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        834 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        848 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        868 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        881 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        891 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
