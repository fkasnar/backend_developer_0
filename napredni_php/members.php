<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

/* $connection = mysqli_connect('localhost', 'root', 'fkasnar', 'videoteka');
if($connection === false){
    die("Connection failed: ". mysqli_connect_error());
}

$sql = "SELECT * from clanovi;";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) === 0) {
    die("There are no memebers in our datbase!");
}

$members = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($connection);

require 'members.view.php'; */


$dsn = 'mysql:host=localhost;dbname=videoteka;charset=utf8mb4';
$user = 'root';
$password = 'fkasnar';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (\Throwable $th) {
    die("Connection failed: " . $th->getMessage());
}

$sql = "SELECT * FROM clanovi;";
$statement = $pdo->prepare($sql);
$statement->execute();

$members = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($members) === 0) {
    die("There are no members in our database!");
}

$pageTitle = 'Members';

require 'members.view.php';
?>