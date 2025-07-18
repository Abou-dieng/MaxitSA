<?php

namespace App\Repository;

class TransactionRepository extends AbstractRepository{

    private static ?TransactionRepository $instance = null;

    private function __construct()
    {
        parent::__construct();
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new TransactionRepository();
        }
    }

    public function selectAll() {}
    public function insert() {}
    public function update() {}
    public function delete() {}
    public function selectById() {}
    public function selectBy(array $filter) {}


    public function selectByCompte() {}

    
}