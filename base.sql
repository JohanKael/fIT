CREATE DATABASE fit;

use fit;

CREATE TABLE UserProfile(
   idUser INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   userName VARCHAR(50) NOT NULL,
   bday DATE,
   userHeight FLOAT NOT NULL,
   userWeight FLOAT NOT NULL,
   userGender VARCHAR(10) NOT NULL,
   userEmail VARCHAR(255) NOT NULL,
   userPassword VARCHAR(255) NOT NULL,
   idObjectif INT
);
CREATE TABLE Objectif(
    idObjectif INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descriObjectif VARCHAR(40)
);
ALTER TABLE UserProfile ADD FOREIGN KEY(idObjectif) REFERENCES Objectif(idObjectif);

CREATE TABLE Plat(
    idPlat INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    nomPlat VARCHAR(30) NOT NULL,
    photoPlat VARCHAR(40),
    apportCalorique FLOAT NOT NULL,
    prixPlat FLOAT,
    catPlat FLOAT
);

CREATE TABLE Regime(
    idRegime INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idObjectif INT NOT NULL,
    Duree INT
);
ALTER TABLE Regime ADD FOREIGN KEY(idObjectif) REFERENCES Objectif(idObjectif);

CREATE TABLE RegimePlat(
    idRegime INT NOT NULL,
    idPlat INT NOT NULL,
    Poids FLOAT
);
ALTER TABLE RegimePlat ADD FOREIGN KEY(idRegime) REFERENCES Regime(idRegime);
ALTER TABLE RegimePlat ADD FOREIGN KEY(idPlat) REFERENCES Plat(idPlat);

CREATE TABLE Activite(
    idActivite INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    nomActivite VARCHAR(30) NOT NULL,
    descriActivite VARCHAR(40) NOT NULL, 
    idObjectif INT
);
ALTER TABLE Activite ADD FOREIGN KEY(idObjectif) REFERENCES Objectif(idObjectif);

CREATE TABLE UserWallet(
    idWallet INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    idUser INT,
    montant FLOAT
);
ALTER TABLE UserWallet ADD FOREIGN KEY(idUser) REFERENCES UserProfile(idUser);

CREATE TABLE MoneyCode(
    idCode INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descriCode VARCHAR(20),
    montantCode FLOAT,
    checkCode INT
);

insert into Objectif(descriObjectif) values('Perde du poids');
insert into Objectif(descriObjectif) values('Vouloir l ICM ideale');
insert into Objectif(descriObjectif) values('Gagner du poids');