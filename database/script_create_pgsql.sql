CREATE TYPE typecompte AS ENUM (
    'principal',
    'secondaire'
);

CREATE TYPE  typetransaction AS ENUM (
    'retrait',
    'depot',
    'paiement'
);
CREATE TABLE profil (
    id serial PRIMARY key,
    libelle VARCHAR(100) NOT NULL
);
CREATE TABLE utilisateur (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    pieceidentite VARCHAR(50) NOT NULL UNIQUE,
    numerotelephone VARCHAR(20) NOT NULL UNIQUE,
    photorecto TEXT,
    profil_id INTEGER NOT NULL,
    photoverso TEXT,
    adresse VARCHAR(50) NOT NULL,
    FOREIGN KEY (profil_id) REFERENCES profil(id)
);

CREATE TABLE compte (
    id SERIAL PRIMARY KEY,
    solde INTEGER,
    type typecompte,
    numero VARCHAR(50),
    utilisateur_id INTEGER,
    numerotelephone VARCHAR(50),
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id) ON DELETE CASCADE
);
CREATE TABLE transaction (
    id SERIAL PRIMARY KEY,
    date DATE,
    compte_id INTEGER NOT NULL,
    type typetransaction NOT NULL,
    montant INTEGER NOT NULL,
    FOREIGN KEY (compte_id) REFERENCES compte(id)
);