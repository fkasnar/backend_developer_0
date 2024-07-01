DROP DATABASE IF EXISTS jednostavnatvrtka;

CREATE DATABASE IF NOT EXISTS jednostavnatvrtka DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE jednostavnatvrtka;

CREATE TABLE IF NOT EXISTS place (
    placa_id  INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    iznos DECIMAL(10,2)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS odjeli_i_pozicije (
    odjel_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    naziv_odjela VARCHAR(50) NOT NULL,
    pozicija VARCHAR(50) NOT NULL
) ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS zaposlenici (
    zaposlenik_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ime VARCHAR(20) NOT NULL,
    prezime VARCHAR(20) NOT NULL,
    radi_od DATE,
    aktivan_zaposlenik BOOLEAN DEFAULT TRUE,
    primarni_odjel_id INT UNSIGNED,
    sekundarni_odjel_id INT UNSIGNED,
    voditelj BOOLEAN DEFAULT NULL,
    placa_id INT UNSIGNED,
    FOREIGN KEY (primarni_odjel_id) REFERENCES odjeli_i_pozicije(odjel_id) ON DELETE SET NULL,
    FOREIGN KEY (sekundarni_odjel_id) REFERENCES odjeli_i_pozicije(odjel_id) ON DELETE SET NULL,
    FOREIGN KEY (placa_id) REFERENCES place(placa_id) ON DELETE SET NULL
) ENGINE=InnoDB;

