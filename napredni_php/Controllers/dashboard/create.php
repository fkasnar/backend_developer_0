<?php

use Core\Database;

$db = Database::get();

    // dostupne kopije filmova
    $sql = "SELECT
        CONCAT(
            'Tip: ', m.tip, ', ',
            'Naslov: ', f.naslov, ', ',
            'Godina: ', f.godina
        ) AS spojeni_podaci
    FROM
        filmovi f
    JOIN
        kopija k ON f.id = k.film_id
    JOIN
        mediji m ON k.medij_id = m.id
    WHERE
        k.dostupan = 1
    GROUP BY
        f.id, m.tip";
    
    $availableCopy = $db->query($sql)->all();

    // clanovi
    $sql = "SELECT * FROM clanovi;";
    $members = $db->query($sql)->all();


require base_path('views/dashboard/index.view.php');