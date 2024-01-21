<?php

require_once __DIR__ . '/../database.php';

$database->query('
CREATE TABLE IF NOT EXISTS rooms(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    num_ch INTEGER UNIQUE NOT NULL,
    etage INTEGER,
    surface NUMERIC(15,2)  ,
    prix NUMERIC,
    gamme TEXT,
    dispo NUMERIC
)
');

$database->query('
CREATE TABLE IF NOT EXISTS equipments(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    nom TEXT
)
');
$database->query('
CREATE TABLE IF NOT EXISTS users(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    adresse2 TEXT,
    nom_utilis TEXT,
    prenom TEXT,
    adresse TEXT,
    num_tel TEXT,
    cp INTEGER,
    ville TEXT,
    pays TEXT,
    email TEXT,
    date_naiss NUMERIC,
    mdp TEXT
)
');
$database->query('
CREATE TABLE reservation(
    num_ch INTEGER,
    id INTEGER,
    num_reserv INTEGER NOT NULL,
    validation NUMERIC,
    date_arrivée NUMERIC,
    date_départ NUMERIC,
    PRIMARY KEY(num_ch, id),
    UNIQUE(num_reserv),
    FOREIGN KEY(num_ch) REFERENCES chambre(num_ch),
    FOREIGN KEY(id) REFERENCES utilisateur(id)
)
');
$database->query('
CREATE TABLE has(
    num_ch INTEGER,
    id INTEGER,
    PRIMARY KEY(num_ch, id),
    FOREIGN KEY(num_ch) REFERENCES chambre(num_ch),
    FOREIGN KEY(id) REFERENCES equipement(id)
)
');