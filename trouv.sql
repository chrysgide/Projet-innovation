CREATE TABLE Bdd_Etat (
  Num_piece INTEGER UNSIGNED NOT NULL,
  Type_piece VARCHAR(20) NULL,
  Nom VARCHAR(45) NULL,
  Prenom VARCHAR(45) NULL,
  Date_naiss DATE NULL,
  Lieu_naiss VARCHAR(45) NULL,
  Adr_email VARCHAR(45) NULL,
  Num_tel INTEGER UNSIGNED NULL,
  PRIMARY KEY(Num_piece)
);

CREATE TABLE Pers_trouv (
  numero INTEGER UNSIGNED NOT NULL,
  Nom VARCHAR(45) NULL,
  Prenom VARCHAR(45) NULL,
  Adr_email VARCHAR(45) NULL,
  Commentaire LONGTEXT NULL,
  Date DATETIME NULL,
  PRIMARY KEY(numero)
);

CREATE TABLE Prop_piece (
  Id_de_la_piece INTEGER UNSIGNED NOT NULL,
  Pers_trouv_id INTEGER UNSIGNED NOT NULL,
  Type_de_piece VARCHAR(20) NULL,
  Nom VARCHAR(45) NULL,
  Prenom VARCHAR(45) NULL,
  Date_naiss DATE NULL,
  Lieu_naiss VARCHAR(45) NULL,
  PRIMARY KEY(Id_de_la_piece),
  CONSTRAINT fk_Prop_piece FOREIGN KEY (Pers_trouv_id) REFERENCES Pers_trouv(numero)
);


