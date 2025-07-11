<?php
namespace App\Service;

use App\Core\App;
use App\Repository\UserRepository;

class SecurityService {

    private static ?SecurityService $securityService = null;
    private UserRepository $userRepository;

    public function __construct() 
    {
        $this->userRepository = App::getDependency('userRepository');
    }

    public static function getInstance(): SecurityService
    {
        if (self::$securityService === null) {
            self::$securityService = new SecurityService();
        }
        return self::$securityService;
    }

    public function seConnecter(string $login): ?object 
    {
        return $this->userRepository->selectByLogin($login);
    }
}