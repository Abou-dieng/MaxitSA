<?php

namespace App\Core;

use App\Controller\ClientController;
use App\Controller\SecurityController;
use App\Repository\CompteRepository;
use App\Repository\TransactionRepository;
use App\Repository\UserRepository;
use App\Service\SecurityService;

$dependencies = [
    "core" => [
        "router" => new Router(),
        "database" => Database::getInstance(),
        "session" => Session::getInstance(),
    ],
    "service" => [
        "securityService" => SecurityService::getInstance(),
    ],
    "repository" => [
        "userRepository" => UserRepository::getInstance(),
        "compteRepository" => CompteRepository::getInstance(),
        "transactionRepository" => TransactionRepository::getInstance(),
    ],
    "controller" => [
        "securityController" => SecurityController::getInstance(),
        "clientController" => ClientController::getInstance()
    ]
];

class App
{

    private function __construct() {}

    public static function getDependency(string $dependency)
    {
        global $dependencies;
        
        foreach ($dependencies as $category) {
            if (isset($category[$dependency])) {
                return $category[$dependency];
            }
        }
        return null;
    }
}
