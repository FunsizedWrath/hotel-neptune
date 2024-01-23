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
CREATE TABLE IF NOT EXISTS users(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    first_name TEXT,
    family_name TEXT,
    phone_nb TEXT,
    email TEXT,
    password TEXT,
    is_admin BOOLEAN
)
');

$database->query('
CREATE TABLE reservation(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    user_id INTEGER
    room_id INTEGER,
    validation NUMERIC,
    date_arrivee NUMERIC,
    date_depart NUMERIC,
    FOREIGN KEY(room_id) REFERENCES rooms(id),
    FOREIGN KEY(user_id) REFERENCES users(id)
)
');