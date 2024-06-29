
<style>


    h1{
        color: rgb(6, 85, 125);
    }
    h2{
        color: rgb(98, 107, 112);
    }
    p{
        color: rgb(98, 107, 112);
    }
    body{
        background-color: black;
        color: rgb(130, 55, 63);
        font-family: sans-serif;
    }
</style>


<h1>PHP funkcije – vježba 1</h1>
<p>
 Proizvoljno deklarirajte funkciju koja vraća neki tekst.<br>
 Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.<br>
 Ispišite vrijednost varijable<br>
</p>


                <h2>PHP KOD:</h2>

                <h2>Deklariranje funkcije, potom varijable i pozivanje varijable</h2>
                
                <?php
         
                        function sayHello() : string
                        {
                            return "Hello World! <br>";
                        }
                        

                       $pozdrav = sayHello();

                       echo "<br><p>Pozivanje funkcije putem varijable:</p>";

                       echo $pozdrav;


                ?>



<br><br><br><br><br>
<hr>
<br><br><br><br><br>



<h1>PHP funkcije – vježba 2</h1>
<p>
Proizvoljno deklarirajte funkciju koja ima dva argumenta (name i surname). Funkcija<br>
treba konkatenirati podatke iz argumenata tako da između postoji razmak i dodijeliti ih<br>
lokalnoj varijabli, zatim treba vrijednost u varijabli pretvoriti u velika slova i to vratiti kao<br>
rezultat.<br>
 Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.<br>
 Ispišite vrijednost varijable.<br>
</p>


                <h2>PHP KOD:</h2>

                <h2></h2>

                <?php


                // Krivo - analiza!
                //     function name()
                //     {
                //         return "MojeIme";
                //     }
                //     function surname()
                //     {
                //         return "MojePrezime";
                //     }

                //     echo "Spajanje dviju varijabli 'name' i 'surname' u jednu varijablu a potom pozivanje iste: <br><br>";


                //     $imeIPrezime = name() . " " . surname();

                //     return $imeIPrezime;

                //     echo "<br><br>Ispisivanje funkcije velikim slovima: <br><br>";

                    
                //     $makeAllCaps = strtoupper($imeIPrezime);
                //    return $makeAllCaps();
                    
                function makeAllCaps(string $name, string $surname) : string {
                    $fullName = "$name $surname";
                    return mb_strtoupper($fullName);
                }

                $ime = makeAllCaps('Filip', 'Jakov');
                echo $ime;

                echo "<br>";
                ?>


<br><br><br><br><br>
<hr>
<br><br><br><br><br>



<h1>PHP funkcije – vježba 3</h1>
<p>
 Proizvoljno deklarirajte funkciju koja ima jedan argument (number). Funkcija treba imati<br>
lokalnu varijablu u koju će pribrojiti vrijednost argumenta number te istu vratiti kao<br>
rezultat. Vrijednost treba biti zadržana kod svakog poziva funkcije. <br>
 Deklarirajte funkciju kao varijablu.<br>
 Pozovite funkciju pomoću varijable, a kao vrijednost argumenta pošaljite slučajan broj u <br>
rasponu od 1 do 10 te ispišite rezultat.<br>
 Ponovite postupak pet puta.<br>
</p>


                <h2>PHP KOD:</h2>

                <h2></h2>

                <?php
                    
                    function zadrziVrijednost($number) {
                       
                        static $ukupno = 0;
                        
                        $ukupno += $number;
                        
                        return $ukupno;
                    }

                   
                    $mojaFunkcija = 'zadrziVrijednost';

                    echo "<br><br> Pozovite funkciju pomoću varijable, a kao vrijednost argumenta pošaljite slučajan broj u 
                    rasponu od 1 do 10 te ispišite rezultat:<br>";

                    for ($i = 0; $i < 5; $i++) {
                        
                        $slucajniBroj = rand(1, 10);
                       
                        $rezultat = $mojaFunkcija($slucajniBroj);
                       
                        
                        echo "Poziv " . ($i + 1) . ": Dodan broj $slucajniBroj, Ukupno = $rezultat\n";
                    }
?>