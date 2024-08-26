<?php

use Core\Database;

if (!isset($_GET['id'])) {
    abort();
}

$db = Database::get();

$sql = 'SELECT * from zanrovi WHERE id = :id';

$genre = $db->query($sql, ['id' => $_GET['id']])->findOrFail();

// SQL query je podešen za prikaz filma u zanru drama, treba napraviti da se SQL query mijenja ovisno o odabranom žanru u prikazu. 
// Dakle ako je gledamo akciju da sql query upucen prema bazi bude iskljucivo da prikazuje filmove u akciji.


$sql = "SELECT f.naslov, f.godina, z.ime AS zanr
FROM filmovi f
JOIN zanrovi z ON f.zanr_id = z.id
WHERE z.ime = 'Drama';";

$recomendations = $db->query($sql)->all();



require base_path('views/genres/show.view.php');

