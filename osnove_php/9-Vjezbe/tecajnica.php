<?php

function prettyPrint(array $print): void
{
    echo "<pre>";
    print_r($print);
    echo "</pre>";
}

const URL = 'https://www.hnb.hr/tecajn-eur/htecajn.htm';

$lista = file(URL);

array_shift($lista);

$usdSrednjiTecaj = 0;

foreach($lista as $valutniRedak){
    if (str_contains($valutniRedak, 'USD')) {
        $usdValues = explode('       ', $valutniRedak);
        $usdSrednjiTecaj = str_replace(',', '.', trim($usdValues[2])); // Zamjena zareza točkom za pravilan float format
        break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konverter valuta</title>
</head>
<body>

    <h2>Konverter valuta: EUR u USD</h2>

    <form method="POST">
        <label for="eurAmount">Unesite iznos u eurima (EUR):</label><br>
        <input type="text" id="eurAmount" name="eurAmount"><br><br>
        <input type="submit" value="Konvertiraj"><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eurAmount'])) {
        $eurAmount = floatval($_POST['eurAmount']);
        if ($usdSrednjiTecaj > 0) {
            $usdAmount = $eurAmount * $usdSrednjiTecaj;
            echo "<p>Iznos u dolarima (USD): " . number_format($usdAmount, 2) . "</p>";
        } else {
            echo "<p>Tečaj za USD nije pronađen.</p>";
        }
    }
    ?>

</body>
</html>