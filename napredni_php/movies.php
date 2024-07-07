<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$connection = mysqli_connect('localhost', 'root', 'fkasnar', 'videoteka');
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

require 'movies.view.php';