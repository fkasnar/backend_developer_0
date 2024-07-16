
<?php

$a = 300;
$b = &$a; // stvara se referenca (pointer) na memorijsku lokaciju varijable $a

echo 'a='.$a;
echo '<br>';
echo 'b='.$b;
