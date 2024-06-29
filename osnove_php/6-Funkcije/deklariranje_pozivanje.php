<?php

// funkcija bez parametara

function writeAlex()
{
    echo "Hello Alex <br>";
}

writeAlex();


// funkcija sa jednim parametrom

function writeName(string $name): void
{
    echo "Hello $name";
}

writeName('Mario');

//void upisujemo ako ne zelimo da funkcija nista ne vraca nazad nakon izvrsenja HTMLu>PHPu.