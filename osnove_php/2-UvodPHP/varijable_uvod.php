<?php

echo "Neki probni tekst";

echo '<br>';

//Varijable

$ime = 'Aleksandar'; // -> ova vrst podatka naziva se String (niz znakova)
$dob = 34; // ova vrst podatka naziva se Integer (cijeli broj)
$masa = 97.8; // ova vrst podatka naziva se Float (decimalni broj)
$hobiji = array('jedrenje', 'arheologija', 'kupanje'); // array (polje podataka)
$samac = true; // boolean (logička vrijednost)

echo $ime.'<br>'.$masa.' <p>'; // Točka je operator spajanja stringova (konkatenacija)
echo $dob.'<br>';

// echo $hobiji; // Array se ne može ispisivati na ovaj način

echo $samac;
echo '<br>';

var_dump($samac);
echo '<br>';

echo 'Moje ime je '.$ime.'.';
echo '<br>';
echo "Moje ime je $ime";
echo '<br>';
echo 'Moje ime je $ime';

echo '<br>';

// Promijena vrijednosti varijable
echo $ime.'<br>';
$ime = 'Ivan';
echo $ime.'<br>';
$ime = 23;
$ime = null;
var_dump($ime);

?>
