<?php

$a = 10;
$b = 0;

// type casting -> promjena tipa podatka
(string)$a;

var_dump( (bool)$a  ); // true
var_dump( boolval($b)  ); // false


var_dump( !$a ); // false

// operator && zahtijeva da su svi izrazi istiniti kako bi vratio true
var_dump($a && $b); // false
var_dump( ($a > $b) && ($b == $a) ); // false

var_dump(false && true); // false
var_dump(true && false); // false
var_dump(false && false); // false
var_dump(true && true); // true

// operator || zahtijeva da je bar jedan izraz istiniti kako bi vratio true
var_dump(true || false); // true
var_dump(false || true); // true
var_dump(true || true); // true
var_dump(false || false); // false

?>