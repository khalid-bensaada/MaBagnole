CREATE DATABASE MaBagnole

USE MaBagnole

CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('client', 'admin') DEFAULT 'client',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description TEXT
);


CREATE TABLE vehicules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categorie_id INT NOT NULL,
    modele VARCHAR(150) NOT NULL,
    prix_par_jour DECIMAL(10,2) NOT NULL,
    disponibilite BOOLEAN DEFAULT TRUE,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (categorie_id) REFERENCES categories(id)
);


CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    vehicule_id INT NOT NULL,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    lieu_prise VARCHAR(150),
    statut ENUM('confirmée', 'annulée') DEFAULT 'confirmée',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (client_id) REFERENCES utilisateurs(id),
    FOREIGN KEY (vehicule_id)REFERENCES vehicules(id)
);


CREATE TABLE avis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    vehicule_id INT NOT NULL,
    note INT CHECK (note BETWEEN 1 AND 5),
    commentaire TEXT,
    deleted_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (client_id) REFERENCES utilisateurs(id),
    FOREIGN KEY (vehicule_id) REFERENCES vehicules(id)
);


INSERT INTO categories (nom ,description)
VALUES("SL","Voiture de sport compacte (roadster) à deux places")

SELECT * FROM categories WHERE nom = "SL";

USE mabagnole ;
ALTER TABLE vehicules
ADD COLUMN caracteristiques VARCHAR(255) AFTER disponibilite;