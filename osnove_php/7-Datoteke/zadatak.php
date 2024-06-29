<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: black;
    color: grey;
}

table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border: 2px solid #333;
            border-radius: 10px;
            overflow: hidden;
            font-size: 16px;
            margin: 10px 50px 10px 50px;
            text-align: center;  
        }

</style>



<?php

//ZADATAK
//1.Pročitajte podatke iz datoteke polaznici.json, te ih ispišite u HTML tablicu.
//2.Dodajte novog polaznika u datoteku polaznici.json, te podatke iz nje ponovo ispišite. -->


//Kreirat ćemo headinge za tablicu 
function tablica($data) {
    $html = '<table border="1">';
    $html .= '<tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>';

//Dodijelit ćemo redove keyevima arraya u tablicu
    foreach ($data as $polaznik) {
        $html .= '<tr>';
        $html .= '<td>' . ($polaznik['name']) . '</td>';
        $html .= '<td>' . ($polaznik['surname']) . '</td>';
        $html .= '<td>' . ($polaznik['age']) . '</td>';
        $html .= '<td>' . ($polaznik['email']) . '</td>';
        $html .= '<td>' . ($polaznik['phone']) . '</td>';
        $html .= '</tr>';
    }

    $html .= '</table>';
    return $html;
}

//Dohvaćanje podataka iz json-a
$jsonData = file_get_contents(__DIR__ . '/podaci/polaznici.json');

//Čitanje podataka iz jsona u dimensional array PHPa
$polaznici = json_decode($jsonData, true);

//Dodavanje novih podatka van jsona direktno na dimensional array kreiranjem nove varijable
$noviPolaznik = [
    "name" => "Josip",
    "surname" => "Broz",
    "age" => 132,
    "email" => "josip.broz@gmail.com",
    "phone" => 385914695001
];

//! moguće je iste podatke odmah i ispisati na json.

//Povezivanje nove varijable sa prvom
$polaznici[] = $noviPolaznik;


//Ispis tablice
echo tablica($polaznici);

?>
</body>
</html>



