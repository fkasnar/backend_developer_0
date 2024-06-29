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
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
            color: grey;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        div{
            width: 50%;
            padding: 100px;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; 
            background-color: #333;
        }

        button{
            margin-bottom: 30px;
            padding: 20px 30px 20px 30px;
            background-color: #333;
            border-radius: 20px;
            border: none;
        }

        a{
            text-decoration: none;
            color: grey;
            font-size: 15px;
        }
    </style>

<section>
<button><a href="/8-Superglobalne_varijable/zadatak.php">Vrati se nazad.</a></button>
</section>

<div>

<?php

$podaci = $_POST;

$ime = $podaci['first_name'];
$prezime = $podaci['last_name'];

if( !empty($ime === '') && ($prezime === '') ){
    echo "Molimo ispunite tražene podatke<br>";
    die();
}

if( !empty($ime === '') ){
    echo ("Molimo ispunite ime. <br>");
    die();
}

if( !empty($prezime === '') ){
    echo "Molimo ispunite prezime. <br>";
    die();
}


echo "Vaši podatci su zaprimljeni! <br>
        Vaše ime je: $ime <br>
        Vaše prezime je: $prezime <br>";

?>
</div>

</body>
</html>