CREATE TABLE IF NOT EXISTS compte(
    -- identifiantLocataire INT NOT NULL AUTO_INCREMENT;
    idcompte INT NOT NULL AUTO_INCREMENT,
    nomcompte VARCHAR (120) NOT NULL,
    prenomcompte VARCHAR (120) NOT NULL,
    nom_famillecompte VARCHAR (120) NOT NULL,
    adressecompte VARCHAR (120) NOT NULL,
    dateNaissance DATE NOT NULL,
    villecompte VARCHAR (60) NOT NULL,
    numTelcompte INT NOT NULL,
    emailcompte VARCHAR(150) NOT NULL,
    PRIMARY KEY (idcompte)
);