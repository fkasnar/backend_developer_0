
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
    
    $sql = "SELECT id FROM clanovi WHERE ime = ?";
    $count = $db->query($sql, [$memberName]);

    if (!empty($count)) {
        die("Ime $memberName vec postoji u nasoj bazi!");
    }

    // Insert the new member into the database
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

    if ($success) {
        http_response_code(200);
        header('Location:members.php');
    } else {
        die('Spremanje člana nije uspjelo! Molimo pokušajte ponovo.');
    }
}

require '../views.file/members-create.view.php';















































if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // TODO: do a validation!!!
    $memberName = $_POST['ime'];

    try {
        $pdo = new PDO($dsn, options:$config['options']);
    
        $sql = "INSERT INTO clanovi (ime) VALUES (:ime)";
    
        $stmt = $pdo->prepare($sql);

        $success = $stmt->execute([
            'ime' => $memberName
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