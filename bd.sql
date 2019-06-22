
CREATE TABLE Pers_trouv ( 
    id_pers INT NOT NULL AUTO_INCREMENT,
    numero INT(11) NOT NULL,
  	Nom VARCHAR(45) NOT NULL,
  	Prenom VARCHAR(45) NOT NULL,
  	Adr_email VARCHAR(45) NOT NULL,
  	Commentaire LONGTEXT NULL,
    PRIMARY KEY (id_pers) 
);

CREATE TABLE Prop_piece (
	id_piece INT NOT NULL AUTO_INCREMENT, 
	Number_piece INT(11) NOT NULL,
	Pers_trouv_id INT NOT NULL,
	Type_de_piece VARCHAR(45) NOT NULL,
	Nom VARCHAR(45) NOT NULL,
	Prenom VARCHAR(45) NOT NULL,
	Date_naiss DATE NOT NULL,
	Lieu_naiss VARCHAR(45) NOT NULL,
	FOREIGN KEY (Pers_trouv_id) REFERENCES Pers_trouv(id_pers),
	PRIMARY KEY (id_piece)
);

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
