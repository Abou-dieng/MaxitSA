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
        $query = 'SELECT * FROM users WHERE login = :telephone';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->execute();
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $row ? \App\Entity\User::toObject($row) : null;
    }

    public function insert(array $data): void
    {
        $query = "INSERT INTO users (nom, prenom, adresse, login, password, numerocarteidentite, photoidentiteverso, photoidentiterecto, typeuser_id) 
                  VALUES (:nom, :prenom, :adresse, :login, :password, :numerocarteidentite, :photoidentiteverso, :photoidentiterecto, :typeuser_id)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':adresse', $data['adresse']);
        $stmt->bindParam(':login', $data['login']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':numerocarteidentite', $data['numero_carte_identite']);
        $stmt->bindParam(':photoidentiteverso', $data['photo_verso']);
        $stmt->bindParam(':photoidentiterecto', $data['photo_recto']);
        $stmt->bindParam(':typeuser_id', $data['typeuser_id']);
        $stmt->execute();
    }
}