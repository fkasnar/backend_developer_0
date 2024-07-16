
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


<h1>PHP nizovi – vježba 1</h1>
<p>
 Definirajte varijablu primeNumbers i dodijelite joj niz koji sadrži prvih pet primarnih<br>
brojeva.<br>
 Provjerite postoji li u nizu treći element, te pomoću funkcije var_dump() ispišite rezultat<br>
provjere. Ako je rezultat provjere true, ispišite vrijednost trećeg elementa, a ako je false<br>
ispišite da treći element u nizu ne postoji.<br>
 Na kraj niza dodajte novu vrijednost, tj. šesti primarni broj.<br>
 Izbrojite i ispišite broj elemenata u nizu.<br>
 Ispišite cijeli niz.<br>
 Sortirajte niz silazno po vrijednostima, te ponovo ispišite cijeli niz. <br>
</p>


                <h2>PHP KOD:</h2>

                <h2>Definiranje varijable primeNumbers, dodjela niza koji sadrži 5 primarnih brojeva:</h2>
                <p>$primeNumbers = array(2, 3, 5, 7, 11);</p>
                <?php
                $primeNumbers = array(2, 3, 5, 7, 11);

                echo "<br><h2>Provjera postoji li u nizu treći element te ispis pomoću var_dump().<br> Rezultat će se 
                                ispisati ovisno sadržava li niz traženu vrijednost true/false </h2>";

                        if (isset($primeNumbers[2])) {
                            var_dump(true);
                            echo "<br>Treći element u nizu je: " . $primeNumbers[2] ;
                        } 
                        else {
                            var_dump(false);
                            echo "<br>Ne postoji treći element u nizu.";
                        }


                        
                echo "<br><h2>Dodavanje šestog člana u listu niza. Šesti primarni broj je broj 13.</h2>";

                        $primeNumbers[] = '13';
                        echo "<br><p>Šesti član je dodan naredbom: varijabla[] = '13';</p>";



                echo "<br><h2>Izbrojati ćemo broj elemenata (sada ih dakle imamo 6) i ispisati rezultat:</h2>";

                        $numberOfElements = count ($primeNumbers);
                        var_dump($numberOfElements);
                        echo "Broj elemenata u nizu je $numberOfElements.";



                echo "<br><h2>Ispisati ćemo sada cijeli niz: </h2>";
                echo "Slijedi cijeli niz liste putem funkcije array_values: ";

                        $values = array_values($primeNumbers);
                        var_dump($values);



                echo "<br>Slijedi cijeli niz liste putem print_r komande: ";
                
                        print_r($primeNumbers);



                echo "<br><h2>Ispisati ćemo i niz na silazni način po vrijednostima služeći se rsort komandom: </h2>";

                        rsort($primeNumbers);
                        $values = array_values($primeNumbers);
                        var_dump($values);


                        
                ?>



<br><br><br><br><br>
<hr>
<br><br><br><br><br>



<h1>PHP nizovi – vježba 2</h1>
<p>
Definirajte varijablu users i dodijelite joj niz koji sadrži podatke za dva korisnika. Svaki<br>
korisnik mora imati sljedeće podatke: ime, prezime, godine, spol. (Napomena: <br>
višedimenzionalni niz).<br>
Ispišite cijeli niz.<br>
U nizu svakom korisniku izbrišite ključ spol i njegovu vrijednost te ponovo ispišite niz.<br>
Dodajte novog korisnika na kraj niza bez ključa spol.<br>
Ispišite cijeli niz.<br>
</p>


                <h2>PHP KOD:</h2>

                <h2>Definiramo varijablu users te joj dodjeljujemo visedimenzionalni niz sa podatcima: ime, prezime, godine i spol. Potom ćemo ga ispisati.</h2>
                <p></p>

                <?php

                        $users = array(
                            array(
                                'ime' => 'Filip',
                                'prezime' => 'Kašnar',
                                'godine' => '27',
                                'spol' => 'M'
                            ),
                            array(
                                'ime' => 'Ivana',
                                'prezime' => 'Horvat',
                                'godine' => '26',
                                'spol' => 'Ž'
                            )
                        );

                        var_dump($users);

                echo "<br><h2>Možemo ispisati niz pomoću print_r: </h2>";

                        print_r($users);



                echo "<br><h2>Možemo ispisati niz pomoću array_values: </h2>";

                        $values = array_values($users);
                        var_dump($values);



                echo "<br><h2>Sada ćemo izbrisati ključ 'spol' te ispisati sve usere niza.</h2>";

                        foreach ($users as $key => $user) {
                            unset($users[$key]['spol']);
                        }
                        print_r($users);



                echo "<br><h2>Sada ćemo dodati novog usera u niz bez ključa 'spol' te ponovno ispisati niz.</h2>";

                        $newUser = array(
                                'ime' => 'Ivan',
                                'prezime' => 'Kovačević',
                                'godine' => '35',
                            );

                        $users[] = $newUser; // ne prolazi ispis svih usera (uključujući prethodno dodanih pa je ovo nužno.)
                        print_r($users);



                ?>