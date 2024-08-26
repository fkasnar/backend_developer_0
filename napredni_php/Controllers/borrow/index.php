<?php

use Core\Database;

$db = Database::get();

$sql = "SELECT 
    p.id AS posudba_id,
    p.datum_posudbe,
    c.id AS clan_id,
    c.ime,
    c.prezime,
    f.naslov AS film,
    cj.cijena
FROM 
    posudba p
JOIN 
    clanovi c ON p.clan_id = c.id
JOIN 
    posudba_kopija pk ON p.id = pk.posudba_id
JOIN 
    kopija k ON pk.kopija_id = k.id
JOIN 
    filmovi f ON k.film_id = f.id
JOIN 
    cjenik cj ON f.cjenik_id = cj.id;";

$borrow = $db->query($sql)->all();

$pageTitle = 'Posudbe';

require base_path('views/borrow/index.view.php');

