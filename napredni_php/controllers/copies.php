<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$dsn = 'mysql:host=localhost;dbname=videoteka;charset=utf8mb4';
$user = 'root';
$password = 'fkasnar';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (\Throwable $th) {
    die("Connection failed: " . $th->getMessage());
}

$sql = "SELECT f.naslov, m.tip, COUNT(f.id) AS 'kolicina'
	FROM kopija k
	JOIN filmovi f ON k.film_id = f.id
    JOIN mediji m ON k.medij_id = m.id
    WHERE k.dostupan = 1
    GROUP BY f.naslov, m.tip;";
$statement = $pdo->prepare($sql);
$statement->execute();

$copies = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($copies) === 0) {
    die("There are no movies in our database!");
}

$pageTitle = 'Broj primjeraka';

require '../views.file/copies.view.php';
?>



