<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/gender' => [
            [['_route' => 'index_gender', '_controller' => 'App\\Controller\\GenderController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_gender', '_controller' => 'App\\Controller\\GenderController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/lucky/number' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
        '/api/roles' => [
            [['_route' => 'index_roles', '_controller' => 'App\\Controller\\RoleController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_roles', '_controller' => 'App\\Controller\\RoleController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/users' => [
            [['_route' => 'list_users', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_users', '_controller' => 'App\\Controller\\UsersController::create'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|gender/([^/]++)(?'
                        .'|(*:68)'
                    .')'
                    .'|roles/([^/]++)(?'
                        .'|(*:93)'
                    .')'
                    .'|users/([^/]++)(?'
                        .'|(*:118)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [
            [['_route' => 'show_gender_by_id', '_controller' => 'App\\Controller\\GenderController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_gender', '_controller' => 'App\\Controller\\GenderController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_gender', '_controller' => 'App\\Controller\\GenderController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        93 => [
            [['_route' => 'show_roles_id', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_roles', '_controller' => 'App\\Controller\\RoleController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_roles', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        118 => [
            [['_route' => 'show_users', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_users', '_controller' => 'App\\Controller\\UsersController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_users', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
