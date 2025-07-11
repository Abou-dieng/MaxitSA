<?php
namespace App\Core\Abstract;

abstract class Singleton
{
    private static ?self $instance = null;

    private function __construct() {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static(); // Utilise 'static' pour l'héritage
        }

        return self::$instance;
    }
}
