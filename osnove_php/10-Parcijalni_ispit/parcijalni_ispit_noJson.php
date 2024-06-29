<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
            color: grey;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        input{
            margin: 10px;
            padding: 10px 20px 10px 20px;
            border-radius: 20px;
        }

        table{
            border: none;
            margin: 30px;
        }

        th{
            padding: 10px 20px 10px 20px;
            border-radius: 20px;
            border: solid 2px;
        }

        td{
            padding: 10px;
            border-radius: 50px;
            border: solid 2px;
            color: green;
        }


    </style>


        <!-- //ZADATAK
        Treba kreirati aplikaciju (vidi sliku) koja će iz
        datoteke words.json u desnu tablicu ispisati sve
        riječi koje su analizirane. 
                     S lijeve strane treba kreirati obrazac kroz koji će
                    se unositi nova riječ.
                     Unesenu riječ treba obraditi na sljedeći način:
                             polje ne smije biti prazno
                             izbrojiti broj slova u riječi
                             izbrojiti suglasnike i samoglasnike u 
                            riječi (za ovu funkcionalnost kreirajte
                            funkcije).
         Obrađenu riječ treba zapisati u words.json
        datoteku -->


        <form method="post" action="/10-Parcijalni_ispit/parcijalni_ispit.php">
            <label for="upisanarijec">Upišite riječ: </label><br>
            <input type="text" id="upisanarijec" name="upisanarijec" value="" placeholder="Random word"><br>
            <input type="submit" value="Pošalji">
        </form>

        <?php

$podatak = $_POST;

$rijec = $podatak['upisanarijec'];
$brojslova = strlen($rijec);

//Suglasnici

$samoSuglasnici = preg_replace("/[^bcčćdđfgghjklmnpqrsštvzžBCČĆDĐFGGHJKLMPQRSŠTVZŽ]/u", "", $rijec);
$brojSuglasnika = strlen($samoSuglasnici);

//Samoglasnici
$samoSamoglasnici = preg_replace("/[^aeiouAEIOU]/u", "", $rijec);
$brojSamoglasnika = strlen($samoSamoglasnici);

if( !empty($rijec === '') ){
    echo "Molimo napišite riječ. <br>";
    die();
}

echo "Odabrana riječ je: $rijec <br>
        Niže je izračun broja slova, samoglasnika i suglasnika. <br>";

?>

<!-- //IZRAČUN I KREIRANJE TABLICE -->
<table>
<tr>
<th> RIJEČ </th>
<th> BROJ SLOVA </th>
<th> BROJ SUGLASNIKA </th>
<th> BROJ SAMOGLASNIKA </th>
</tr>
<tr>
<td><?php echo ' ' . $rijec  ?></td>
<td><?php echo ' ' . $brojslova  ?></td>
<td><?php echo ' ' . $brojSuglasnika  ?></td>
<td><?php echo ' ' . $brojSamoglasnika ?></td>
</tr>
</table>
        
    
</body>
</html>