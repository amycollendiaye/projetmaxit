CREATE TABLE profil (
    id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(100) NOT NULL
);

CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    pieceidentite VARCHAR(50) NOT NULL UNIQUE,
    numerotelephone VARCHAR(20) NOT NULL UNIQUE,
    photorecto TEXT,
    profil_id INT NOT NULL,
    photoverso TEXT,
    adresse VARCHAR(50) NOT NULL,
    FOREIGN KEY (profil_id) REFERENCES profil(id)
);

CREATE TABLE compte (
    id INT AUTO_INCREMENT PRIMARY KEY,
    solde INT,
    type ENUM('principal', 'secondaire'),
    numero VARCHAR(50),
    utilisateur_id INT,
    numerotelephone VARCHAR(50),
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id) ON DELETE CASCADE
);

CREATE TABLE transaction (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    compte_id INT NOT NULL,
    type ENUM('retrait', 'depot', 'paiement') NOT NULL,
    montant INT NOT NULL,
    FOREIGN KEY (compte_id) REFERENCES compte(id)
);
