<h1>PHP operatori - vježba</h1>
<p>
 Definirajte varijable a, b, c i d. Varijablama a i b dodijelite vrijednost integer, a varijablama<br>
c i d vrijednost string.<br>
 Nad varijablama a i b primijenite sve aritmetičke operatore i ispišite rezultate.<br>
 Nad varijablama c i d primijenite operator konkatenacije i dobivenu vrijednost dodijelite<br>
varijabli f, te ispišite vrijednost varijable f.<br>
 Nad varijablama a i b primijenite jedan od kombiniranih operatora dodjele i ispišite<br>
rezultat.<br>
 Nad varijablom a i b primijenite operator usporedbe (veće od) i pomoću var_dump()<br>
funkcije ispišite rezultat. <br>
 Nad varijablom a primijenite operator inkrementa i istovremeno ispišite rezultat.<br>
 Nad varijablom b primijenite operator dekrementa i istovremeno ispišite rezultat.<br>
</p>


<h2>PHP KOD:</h2>

<h2>Upravljanje integerom - primjena aritmetičkih operatora:</h2>
<p>Odabrani brojevi: A=27, B=-5</p>

<?php
$a = 27;
$b = -5;

echo "<br><p>Zbrajanje:</p>";
echo $a += $b;

$a = 27;
$b = -5;
echo "<br><p>Oduzimanje:</p>";
echo $a -= $b;

$a = 27;
$b = -5;
echo "<br><p>Množenje:</p>";
echo $a *= $b;

$a = 27;
$b = -5;
echo "<br><p>Dijeljenje:</p>";
echo $a /= $b;

$a = 27;
$b = -5;
echo "<br><p>Ostatak:</p>";
echo $a %= $b;




echo "<br><h2>Upravljanje stringovima - primjena operatora konkatencije, dodjela vrijednosti varijabli F:</h2>";
$c = "Bok, ja sam Filip";
$d = " Kašnar.";
$f = $a.$b;

echo "<p>Odabrani stringovi:<br>
c = 'Bok, ja sam Filip'<br>
d = ' Kašnar.'</p>";

echo "<br><p>Pozivanje C+D:</p>";
echo $c.$d;
echo "<br>";

echo "<br><p>Pozivanje F:</p>";
$f = $c . $d;

echo $f;

echo "<br><h2>Upravljanje integerom - primjena kombiniranog operatora dodjele na varijable A i B: </h2>";
$a += $b;

echo "a nakon a += b: " . $a . "\n";


echo "<br><h2>Upravljanje integerom - primjena operatora usporedbe (veće od) i ispis funkcije pomoću var_dump() </h2>";
var_dump($a > $b);


echo "<br><h2>Upravljanje integerom - primjena operatora inkrementa nad varijablom A: </h2>";
echo "a nakon inkrementa: " . (++$a) . "\n";

echo "<br><h2>Upravljanje integerom - primjena operatora dekrementa nad varijablom B: </h2>";
echo "b nakon dekrementa: " . (--$b) . "\n";
?>