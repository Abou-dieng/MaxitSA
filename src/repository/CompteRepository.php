<?php

namespace App\Repository;

use App\Entity\Compte;

// Add this if AbstractRepository is in the same directory and namespace
abstract class AbstractRepository {
    // You can add common repository methods or leave it empty for now
}

class CompteRepository extends AbstractRepository {

    private static ?CompteRepository $instance = null;

    private function __construct()
    {
        parent::__construct();
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new CompteRepository();
        }
    }

    public function selectAll() {}
    public function insert() {}
    public function update() {}
    public function delete() {}
    public function selectById() {}
    public function selectBy(array $filter) {}





    public function findAll(array $filter) : array {
        return [];
    }

    public function findById(): ?Compte {

        return null;
    }

    public function findByTelephone(string $telephone) {}

}