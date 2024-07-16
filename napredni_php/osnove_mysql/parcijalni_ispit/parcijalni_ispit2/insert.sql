INSERT INTO place (placa_id, iznos) VALUES ("1", "100");
INSERT INTO place (placa_id, iznos) VALUES ("2", "200");
INSERT INTO place (placa_id, iznos) VALUES ("3", "300");
INSERT INTO place (placa_id, iznos) VALUES ("4", "400");
INSERT INTO place (placa_id, iznos) VALUES ("5", "500");
INSERT INTO place (placa_id, iznos) VALUES ("6", "600");
INSERT INTO place (placa_id, iznos) VALUES ("7", "700");
INSERT INTO place (placa_id, iznos) VALUES ("8", "800");


INSERT INTO odjeli_i_pozicije (odjel_id, naziv_odjela, pozicija) VALUES ("1", "Marketing", "Voditelj");
INSERT INTO odjeli_i_pozicije (odjel_id, naziv_odjela, pozicija) VALUES ("2", "Prodaja", "Voditelj");
INSERT INTO odjeli_i_pozicije (odjel_id, naziv_odjela, pozicija) VALUES ("3", "Tehnika", "Voditelj");
INSERT INTO odjeli_i_pozicije (odjel_id, naziv_odjela, pozicija) VALUES ("4", "Marketing", "Specijalist");
INSERT INTO odjeli_i_pozicije (odjel_id, naziv_odjela, pozicija) VALUES ("5", "Prodaja", "Predstavnik");
INSERT INTO odjeli_i_pozicije (odjel_id, naziv_odjela, pozicija) VALUES ("6", "Tehnika", "Specijalist");
INSERT INTO odjeli_i_pozicije (odjel_id, naziv_odjela, pozicija) VALUES ("7", "0", "0");



INSERT INTO zaposlenici (ime, prezime, radi_od, aktivan_zaposlenik, primarni_odjel_id, sekundarni_odjel_id, voditelj, placa_id) 
VALUES ('Ime1', 'Prezime1', '2024-04-01', TRUE, 1, NULL, TRUE, 8);

INSERT INTO zaposlenici (ime, prezime, radi_od, aktivan_zaposlenik, primarni_odjel_id, sekundarni_odjel_id, voditelj, placa_id) 
VALUES ('Ime2', 'Prezime2', '2024-04-02', FALSE, 3, 4, FALSE, 7);

INSERT INTO zaposlenici (ime, prezime, radi_od, aktivan_zaposlenik, primarni_odjel_id, sekundarni_odjel_id, voditelj, placa_id) 
VALUES ('Ime3', 'Prezime3', '2024-04-03', TRUE, 2, NULL, TRUE, 6);

INSERT INTO zaposlenici (ime, prezime, radi_od, aktivan_zaposlenik, primarni_odjel_id, sekundarni_odjel_id, voditelj, placa_id) 
VALUES ('Ime4', 'Prezime4', '2024-04-04', TRUE, 1, NULL, FALSE, 5);

INSERT INTO zaposlenici (ime, prezime, radi_od, aktivan_zaposlenik, primarni_odjel_id, sekundarni_odjel_id, voditelj, placa_id) 
VALUES ('Ime5', 'Prezime5', '2024-04-05', FALSE, 2, 1, TRUE, 4);

INSERT INTO zaposlenici (ime, prezime, radi_od, aktivan_zaposlenik, primarni_odjel_id, sekundarni_odjel_id, voditelj, placa_id) 
VALUES ('Ime6', 'Prezime6', '2024-04-06', TRUE, 3, 5, FALSE, 3);

INSERT INTO zaposlenici (ime, prezime, radi_od, aktivan_zaposlenik, primarni_odjel_id, sekundarni_odjel_id, voditelj, placa_id) 
VALUES ('Ime7', 'Prezime7', '2024-04-07', TRUE, 5, 4, FALSE, 2);