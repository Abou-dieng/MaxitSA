Script Complet d'Installation
sql-- Créer les types ENUM
CREATE TYPE type_compte_enum AS ENUM ('Principale', 'Secondaire');
CREATE TYPE type_transaction_enum AS ENUM ('Depot', 'paiement', 'Retrait');
CREATE TYPE statut_transaction_enum AS ENUM ('Valide', 'Annule');

-- Créer les tables dans l'ordre des dépendances
CREATE TABLE type_user (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(150) NOT NULL,
    login VARCHAR(25) UNIQUE NOT NULL,
    password VARCHAR(150) NOT NULL,
    adresse TEXT,
    numero_carte_identite VARCHAR(13),
    photo_identite_verso VARCHAR(255),
    photo_identite_recto VARCHAR(255),
    type_user_id INTEGER NOT NULL,
    FOREIGN KEY (type_user_id) REFERENCES type_user(id)
);

CREATE TABLE compte (
    id SERIAL PRIMARY KEY,
    tel VARCHAR(20),
    type_compte type_compte_enum NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    solde DECIMAL(15,2) DEFAULT 0,
    user_id INTEGER NOT NULL,select * from users
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE transaction (
    id SERIAL PRIMARY KEY,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    type_transaction type_transaction_enum NOT NULL,
    statut_transaction statut_transaction_enum NOT NULL,
    montant DECIMAL(15,2) NOT NULL,
    compte_id INTEGER NOT NULL,
    FOREIGN KEY (compte_id) REFERENCES compte(id)
);

-- Créer les index
-- CREATE INDEX idx_users_type_user ON users(type_user_id);
-- CREATE INDEX idx_compte_user ON compte(user_id);
-- CREATE INDEX idx_transaction_compte ON transaction(compte_id);
-- CREATE INDEX idx_users_login ON users(login);
-- CREATE INDEX idx_transaction_date ON transaction(date);
-- CREATE INDEX idx_transaction_type ON transaction(type_transaction);

-- Insérer les données de base
-- INSERT INTO type_user (nom) VALUES 
-- ('client'),
-- ('service commercoal');
