<?php

require_once '../functions.php';
require_once '../Database.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $filmNaslov = $_POST['film'];

    
    $db = new Database();

    // check if name already exsists in db
    $sql = "SELECT id FROM filmovi WHERE naslov = ?";
    $count = $db->query($sql, [$filmNaslov]);

    if(!empty($count)){
        die("naslov $filmNaslov vec postoji u nasoj bazi!");
    }
    
    $sql = "INSERT INTO filmovi (naslov) VALUES (:naslov)";

    try {
        $success = $db->query($sql, ['ime' => $filmNaslov]);
    } catch (\Throwable $th) {
        throw $th;
    }

    http_response_code(200);
    header('Location:/controllers/movies.php');
}

require '../views.file/movies-create.view.php';

















































if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // TODO: do a validation!!!
    $naslovFilma = $_POST['naslov'];

    try {
        $pdo = new PDO($dsn, options:$config['options']);
    
        $sql = "INSERT INTO filmovi (naslov) VALUES (:naslov)";
    
        $stmt = $pdo->prepare($sql);

        $success = $stmt->execute([
            'ime' => $naslovFilma
        ]);
    
        if ($success) {
            http_response_code(200);
            header('Location:movies.php');
        }else {
            die('Unable to save to the database!');
        }
    
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}else {
    require '../views/movies-create.view.php';
}