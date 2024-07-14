<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

/* $connection = mysqli_connect('localhost', 'root', 'fkasnar', 'videoteka');
if($connection === false){
    die("Connection failed: ". mysqli_connect_error());
}

$sql = "SELECT f.naslov, f.godina, tip_filma, z.ime AS Zanr, c.cijena AS Cijena
FROM filmovi f
JOIN zanrovi z ON f.zanr_id = z.id
JOIN cjenik c ON f.cjenik_id = c.id;";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) === 0) {
    die("There are no movies in our datbase!");
}

$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($connection);

require 'movies.view.php'; */

$dsn = 'mysql:host=localhost;dbname=videoteka;charset=utf8mb4';
$user = 'root';
$password = 'fkasnar';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (\Throwable $th) {
    die("Connection failed: " . $th->getMessage());
}

$sql = "SELECT
    p.datum_posudbe,
    p.datum_povrata,
    c.ime AS 'Ime Clana',
    f.naslov,
    m.tip AS Medij,
    zanrovi.ime AS Zanr,
    cj.tip_filma,
    ROUND(cj.cijena * m.koeficijent, 2) AS Cijena,
    ROUND(cj.zakasnina_po_danu * m.koeficijent, 2) AS Zakasnina
from
    posudba p
    JOIN clanovi c ON p.clan_id = c.id
    JOIN posudba_kopija pk ON p.id = pk.posudba_id
    JOIN kopija k ON pk.kopija_id = k.id
    JOIN filmovi f ON k.film_id = f.id
    JOIN mediji m ON k.medij_id = m.id
    JOIN zanrovi ON zanrovi.id = f.zanr_id
    JOIN cjenik cj ON cj.id = f.cjenik_id;";
$statement = $pdo->prepare($sql);
$statement->execute();

$lends = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($lends) === 0) {
    die("There are no movies in our database!");
}

$pageTitle = 'Posudbe';

require 'lend.view.php';
?>