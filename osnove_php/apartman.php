<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

///////////////// PRVA FORMA 7 OSOBA 1 VELIKI APARTMAN
$podatak = $_POST;

$cifra = $podatak['1Velikiapartmansvidani'];
$iznosPoDanu = ($cifra / 4);

$ekipaOdPocetka1Dio = ( ($iznosPoDanu * 2 ) / 5 );
$ekipaOdPocetka2Dio = (($iznosPoDanu * 2 )/ 7);
$ekipaOdPocetkaUkupno = ($ekipaOdPocetka1Dio + $ekipaOdPocetka2Dio );

$ekipaOdPocetka1DioIznosa = ($dnevnoNocenje1dio * 2) . "EUR";
$ekipaOdPocetka2DioIznosa = ($dnevnoNocenje2dio * 2) . "EUR";
//--------------------------------------------------------------
$VikendEkipa = ( ($iznosPoDanu * 2 ) / 7 );




///////////////// DRUGA FORMA 7 OSOBA 1 VELIKI APARTMAN

//VELIKI APARTMAN--------------------------------
$cifra2 = $podatak['1Ap5osSviDani'];
$poNocenju = ($cifra2 / 4);
$ljudiOdPocetkaPlacaju = (($poNocenju * 4) / 5);

//mali APARTMAN--------------------------------
$cifra3 = $podatak['1Ap2os2Dana'];
$poNocenju3 = ($cifra3 / 2);
$ljudiOdVikendaPlacaju = (($poNocenju3 * 2) / 2);

//KOMBINIRANI IZNOS:
$kombiniranoUkupno = $cifra2 + $cifra3;

//-Ekipa od početka-----------------------



?>
<h2>1 Veliki Apartman za sve</h2>
        <form method="post" action="/apartman.php">
            <label for="1Velikiapartmansvidani">Upišite iznos za 1 apartman 7 osoba: </label><br>
            <input type="number" id="1Velikiapartmansvidani" name="1Velikiapartmansvidani" value="" placeholder="Cijena 7osoba/14.8-17.8"><br>
            <input type="submit" value="Pošalji">
        </form>
        <hr>
        <p> <?php echo "Iznos po 1 noćenju: " . $iznosPoDanu . " EUR"; ?> </p>
        <hr>
        <p> <?php echo "Ekipu od početka iznosi ukupno: " . $ekipaOdPocetkaUkupno . " EUR"; ?> </p>
        <p>(Ekipa koja je od početka plaća prva 2 dana veći iznos <br>
        jer se iznos dijeli na 5 osoba, druga 2 noćenja se dijeli na 7 osoba pa je iznos manji po osobi dnevno)</p>
        <br>
        <p> <?php echo "Ekipa od vikenda: " . $VikendEkipa . " EUR"; ?> </p>
        <p>(Ekipa koja je od vikenda plaća 2 dana, 2 noćenja se dijeli na 7 osoba pa je iznos manji po osobi dnevno)</p>

<br>

<h2>Prvi Apartman za 5 osoba</h2>


        <form method="post" action="/apartman.php">
            <label for="1Ap5osSviDani">Upišite iznos za 1. apartman/5 osoba: </label><br>
            <input type="number" id="1Ap5osSviDani" name="1Ap5osSviDani" value="" placeholder="Cijena 5osoba/14.8-17.8"><br>

            <hr>
            <p> <?php echo "Iznos po 1 noćenju: " . $poNocenju . " EUR"; ?> </p>
            <hr>
            <p> <?php echo "Ekipu od početka iznosi ukupno: " . $ljudiOdPocetkaPlacaju . " EUR"; ?> </p>
            <p>(Ekipa koja je od početka plaća gore navedeni iznos.)</p>
            <br>

            <br>
<h2>Drugi Apartman za 2 osoba</h2>

            <label for="1Ap2os2Dana">Upišite iznos za 2. apartman/2 osoba: </label><br>
            <input type="number" id="1Ap2os2Dana" name="1Ap2os2Dana" value="" placeholder="Cijena 2osoba/16.8-18.8"><br>
            <hr>
            <p> <?php echo "Iznos po 1 noćenju: " . $poNocenju3 . " EUR"; ?> </p>
            <hr>
            <p> <?php echo "Ekipu od vikenda iznosi ukupno: " . $ljudiOdVikendaPlacaju . " EUR"; ?> </p>
            <p>(Ekipa koja je od vikenda plaća gore navedeni iznos.)</p>
            <br>
            <input type="submit" value="Pošalji">
        </form>

</body>
</html>