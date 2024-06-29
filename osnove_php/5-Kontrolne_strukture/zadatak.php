
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


<h1>PHP kontrolne strukture – vježba 1</h1>
<p>
 Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.<br>
 Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.<br>
 Ako je uvjet istinit, ispišite da je b između a i c, a ako je uvjet lažan ispišite da nije.<br>
 Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c.<br>
</p>


                <h2>PHP KOD:</h2>
                
<!-- //Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15. -->             
                <?php
                    $a = 5;
                    $b = 10;
                    $c = 15;
                echo "Odredili smo varijable a, b i c sa vrijednostima tim redoslijedom: ". $a .",". $b ." i ". $c . "<br><br>";
                ?>              
                
                <?php
//Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c.
                    $a = 5;
                    $b = 10;
                    $c = 15;
                                    
                    if (($b < $c && $b > $a) || ($b > $c && $b < $a)) {
                        echo 'b je između a i c';
                    }else {
                        echo 'b nije između a ic';                    }
                ?>



<br><br><br><br><br>
<hr>
<br><br><br><br><br>



<h1>PHP kontrolne strukture – vježba 2</h1>
<p>
 Koristeći uvjetovani tip kontrolne strukture switch ispišite koji je trenutno dan u tjednu.<br>
 Za ispravno izvršenu vježbu koristite PHP funkciju date(). Nazivi dana moraju biti na<br>
hrvatskom jeziku.<br>
</p>


                <h2>PHP KOD:</h2>

                <h2>Koristeći uvjetovani tip kontrolne strukture switch ispišite koji je trenutno dan u tjednu.</h2>

                <?php

                    $day = date('N');

                    switch ($day) {
                        case '1':
                            echo 'Danas je Ponedjeljak.';
                            break;

                        case '2':
                            echo 'Danas je Utorak.';
                            break;

                        case '3':
                            echo 'Danas je Srijeda.';
                            break;

                        case '4':
                            echo 'Danas je Četvrtak.';
                            break;

                        case '5':
                            echo 'Danas je Petak.';
                            break;

                        case '6':
                            echo 'Danas je Subota.';
                            break;

                        case '7':
                            echo 'Danas je Nedjelja.';
                            break;
                        
                        default:
                            echo 'Ne znam koji je danas dan.';
                            break;
                    }

                ?>