
Dohvatite sve zaposlenike i njihove place

        SELECT
            z.ime AS Ime,
            z.prezime AS Prezime,
            p.iznos AS Iznos
        FROM
            zaposlenici z
        JOIN
            place p ON z.placa_id = p.placa_id
        WHERE
            z.aktivan_zaposlenik = 1;

Dohvatite sve voditelje odjela i plaće

        SELECT
            z.ime AS Ime,
            z.prezime AS Prezime,
            p.iznos AS Iznos
        FROM zaposlenici z
        JOIN
            place p ON z.placa_id = p.placa_id
        WHERE
            z.aktivan_zaposlenik = 1 AND z.voditelj = TRUE;

Dohvatite sve voditelje odjela i izračunajte prosjek njihovih plaća.

        SELECT
            z.ime AS Ime,
            z.prezime AS Prezime,
            p.iznos AS Iznos,
            (SELECT AVG(p2.iznos)
            FROM zaposlenici z2
            JOIN place p2 ON z2.placa_id = p2.placa_id
            WHERE z2.aktivan_zaposlenik = 1 AND z2.voditelj = 1) AS ProsjecnaPlaca
        FROM
            zaposlenici z
        JOIN
            place p ON z.placa_id = p.placa_id
        WHERE
            z.aktivan_zaposlenik = 1 AND z.voditelj = 1;

 Kreirajte proceduru koja će računati prosjek plaća svih zaposlenika


        DELIMITER //

            CREATE PROCEDURE place()
            BEGIN

                SELECT
                AVG(p.iznos) AS ProsjecnaPlacaSvih
                FROM
                zaposlenici z
                JOIN
                place p ON z.placa_id = p.placa_id
                WHERE
                z.aktivan_zaposlenik = 1;

            END //

        DELIMITER ;

        CALL place;