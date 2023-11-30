CREATE TABLE rooms(
   id_room INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE NOT NULL,
   room_floor INTEGER,
   surface NUMERIC(4,2),
   price NUMERIC,
   nb_wc INTEGER,
   nb_bathroom INTEGER,
   type TEXT,
   exposure TEXT,
   nb_single_beds INTEGER,
   nb_double_beds INTEGER,
   nb_sofas INTEGER,
   availability NUMERIC
);

CREATE TABLE equipments(
   id_equipment INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE NOT NULL,
   name TEXT
);

CREATE TABLE users(
   id_user INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE NOT NULL,
   first_name TEXT,
   family_name TEXT,
   phone_nb TEXT,
   email TEXT,
   password TEXT
);

CREATE TABLE reservation(
   id_room INTEGER,
   id_user INTEGER,
   id_reservation INTEGER NOT NULL UNIQUE,
   confirmation NUMERIC,
   arrival NUMERIC,
   departure NUMERIC,
   PRIMARY KEY(id_room, id_user),
   FOREIGN KEY(id_room) REFERENCES rooms(id_room),
   FOREIGN KEY(id_user) REFERENCES users(id_user)
);

CREATE TABLE has(
   id_room INTEGER,
   id_equipment INTEGER,
   PRIMARY KEY(id_room, id_equipment),
   FOREIGN KEY(id_room) REFERENCES rooms(id_room),
   FOREIGN KEY(id_equipment) REFERENCES equipments(id_equipment)
);
