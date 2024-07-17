
    <?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '../functions.php';
require_once '../Database.php';



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $memberName = $_POST['ime'];
    $memberSurname = $_POST['prezime'];
    $memberAddress = $_POST['adresa'];
    $memberPhone = $_POST['telefon'];
    $memberEmail = $_POST['email'];
    $memberID = $_POST['clanski_broj'];

    
    $db = new Database();
    
    // provjera jel postoji u bazi - po emailu jer je jedinstven
    $sql = "SELECT id FROM clanovi WHERE email = ?";
    $count = $db->query($sql, [$memberEmail]);

    if (!empty($count)) {
        die("E-mail $memberEmail vec postoji u nasoj bazi!");
    }

    // ubacivanje u bazu
    $sql = "INSERT INTO clanovi (ime, prezime, adresa, telefon, email, clanski_broj) VALUES (:ime, :prezime, :adresa, :telefon, :email, :clanski_broj)";

    try {
        $success = $db->query($sql, [
            'ime' => $memberName,
            'prezime' => $memberSurname,
            'adresa' => $memberAddress,
            'telefon' => $memberPhone,
            'email' => $memberEmail,
            'clanski_broj' => $memberID
        ]);
    } catch (\Throwable $th) {
        throw $th;
    }

    
        http_response_code(200);
        header('Location:/controllers/members.php');
}

require '../views/members-create.view.php';















































if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // TODO: do a validation!!!
    $memberEmail = $_POST['ime'];

    try {
        $pdo = new PDO($dsn, options:$config['options']);
    
        $sql = "INSERT INTO clanovi (email) VALUES (:email)";
    
        $stmt = $pdo->prepare($sql);

        $success = $stmt->execute([
            'ime' => $memberEmail
        ]);
    
        if ($success) {
            http_response_code(200);
            header('Location:members.php');
        }else {
            die('Unable to save to the database!');
        }
    
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}else {
    require '../views/members-create.view.php';
}