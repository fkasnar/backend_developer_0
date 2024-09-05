<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$connection = mysqli_connect('localhost', 'root', 'fkasnar', 'videoteka');
if($connection === false){
    die("Connection failed: ". mysqli_connect_error());
}

$sql = "SELECT *
FROM zanrovi
ORDER BY id ASC;";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) === 0) {
    die("There are no memebers in our datbase!");
}

$genres = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($connection);

require '../views/genres.view.php';


