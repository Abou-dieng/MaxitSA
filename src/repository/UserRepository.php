<?php

namespace App\Repository;

use App\Core\Abstract\AbstractRepository;
 // <-- AJOUTE CETTE LIGNE
use App\Entity\User;
use PDO;

class UserRepository extends AbstractRepository {

    private static ?UserRepository $instance = null;

    private function __construct()
    {
        parent::__construct();
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new UserRepository();
        }
        return self::$instance;
    }

    public function selectAll() {}
    public function insert() {}
    public function update() {}
    public function delete() {}
    public function selectById() {}
    public function selectBy(array $filter) {}


    public function selectByLogin(string $login): ?User
    {
        $start = microtime(true);
        $query = 'SELECT * FROM personne WHERE login = :login';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        error_log('Requête login exécutée en ' . (microtime(true) - $start) . 's');
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? User::toObject($row) : null;
    }

    public function findByTelephone(string $telephone): ?User
    {
        $query = 'SELECT u.* 
                  FROM users u
                  JOIN compte c ON c.user_id = u.id
                  WHERE c.telephone = :telephone
                  LIMIT 1';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->execute();
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $row ? \App\Entity\User::toObject($row) : null;
    }


}