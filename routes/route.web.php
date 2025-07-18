<?php

// Tableau contenant les differentes routes de l'appli

use App\Controller\ClientController;
use App\Controller\SecurityController;
use App\Core\ErrorController;

$routes = [
    '/' => [
        'controller' => SecurityController::class,
        'action' => 'index'
    ],
    '/account/create' => [
        'controller' => SecurityController::class,
        'action' => 'createAccount'
    ],
    '/login' => [
        'controller' => SecurityController::class,
        'action' => 'login',
        // 'middlewares' => ['cryptPassword'],

    ],
    '/logout' => [
        'controller' => SecurityController::class,
        'action' => 'logout'
    ],
    '/error/404' => [
        'controller' => ErrorController::class,
        'action' => 'notFound'
    ],
    '/error/403' => [
        'controller' => ErrorController::class,
        'action' => 'forbidden'
    ], 
    '/client/dashboard' => [
        'controller' => ClientController::class,
        // 'middlewares' => ['auth', 'isClient'],
        'action' => 'index'
    ],
    '/client/transactions' => [
        'controller' => ClientController::class,
        // 'middlewares' => ['auth', 'isClient'],
        'action' => 'listTransactons'
    ],
    '/register' => [
        'controller' => SecurityController::class,
        'action' => 'register'
    ]
];