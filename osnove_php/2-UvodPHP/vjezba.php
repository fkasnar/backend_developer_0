<h1>PHP varijable i konstante - vježba</h1>
<p>
 Definirajte nekoliko različitih varijabli i dodijelite im sljedeće tipove podataka:<br>
– cijeli broj (integer)<br>
– realni broj (floating-point number)<br>
– tekstualni podatak (string)<br>
– logička vrijednost (boolean) <br>
 Ispišite definirane varijable.<br>
 Definirajte nekoliko konstanti koje poznajete (npr. pi), te ih zatim ispišite.<br>
 Definirajte varijablu a i dodijelite joj neku vrijednost. Zatim definirajte varijablu b i<br>
referencirajte je na varijablu a. Ispišite varijablu b. Zatim promijenite vrijednost u varijabli a<br>
i ponovo ispišite varijablu b.
</p>


<h2>PHP KOD:</h2>


<?php

$int = 2;
$float = 6.4;
$string = "tekst";
$bool = true;

echo "TIPOVI:";
echo "<br>";
echo "int = $int";
echo "<br>";
echo "float = $float";
echo "<br>";
echo "string = $string";
echo "<br>";
echo "bool = $bool";
echo "<br>";

const PI = 3.14;
const e = 2.72;
const korijenIz2 = 1.41;

echo "<br>";
echo "KONSTANTE:";
echo "<br>";
echo "PI = " . PI;
echo "<br>";
echo "e = " . e;
echo "<br>";
echo "korijenIz2 = " . korijenIz2;
echo "<br>";

$a = 2;
$b =&$a;

echo "<br>";
echo "REFERENCE:";
echo "<br>";
echo "b = $b";
echo "<br>";

$a = 8;

echo "b = $b";
echo "<br>";

?>