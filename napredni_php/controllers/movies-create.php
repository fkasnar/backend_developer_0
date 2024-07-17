
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '../functions.php';
require_once '../Database.php';



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $movieName = $_POST['naslov'];
    $movieYear = $_POST['godina'];
    $movieGenre = $_POST['zanr_id'];
    $moviePrice = $_POST['cjenik_id'];
    

    
    $db = new Database();
    
    // provjera jel postoji u bazi - po naslovu
    $sql = "SELECT id FROM filmovi WHERE naslov = ?";
    $count = $db->query($sql, [$movieName]);

    if (!empty($count)) {
        die("Film naslova ( $movieName ) vec postoji u bazi!");
    }

    // ubacivanje u bazu
    $sql = "INSERT INTO filmovi (naslov, godina, zanr_id, cjenik_id) VALUES (:naslov, :godina, :zanr_id, :cjenik_id)";

    try {
        $success = $db->query($sql, [
            'naslov' => $movieName,
            'godina' => $movieYear,
            'zanr_id' => $movieGenre,
            'cjenik_id' => $moviePrice
        ]);
    } catch (\Throwable $th) {
        throw $th;
    }

    
        http_response_code(200);
        header('Location:/controllers/movies.php');
}

require '../views/movies-create.view.php';









































if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // TODO: do a validation!!!
    $movieName = $_POST['naslov'];

    try {
        $pdo = new PDO($dsn, options:$config['options']);
    
        $sql = "INSERT INTO filmovi (naslov) VALUES (:naslov)";
    
        $stmt = $pdo->prepare($sql);

        $success = $stmt->execute([
            'naslov' => $movieName
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
    require '../views.file/movies-create.view.php';
}