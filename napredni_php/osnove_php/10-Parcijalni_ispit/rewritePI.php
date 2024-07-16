<!DOCTYPE html>
<html>
<body>

    <style>
            html{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        th, td {
            border: solid 2px;
            border-radius: 15px;
            margin: 10px;
            padding: 10px 20px;
            text-align: center;
        }

        table{
            display: flex;
            width: 100vw;
        }

        form{
            width: 100%;
        }

    </style>

    <form method="POST" action="rewritePI.php">
        <label for="rijec">Analiza riječi</label>
        <input type="text" placeholder="Nasumična riječ" name="RIJEC" id="rijec">
        <input type="submit" value="Pošalji">
    </form>

<br><br><br>
<hr>
<br><br><br>

 
<?php


$upisanaRijec = $_POST['RIJEC'];



//FUNKCIJE I OBRADA RIJECI: //////////////////////////////////////////



// -- SAMOGLASNICI--------------------------

function brojanjeSamoglasnika($upisanaRijec)
{
    preg_match_all("/[aeiou]/i", $upisanaRijec, $brojSamoglasnika);
    return count($brojSamoglasnika[0]);
}
$samoglasnici = brojanjeSamoglasnika($upisanaRijec);



// -- SUGLASNICI----------------------------

function brojanjeSuglasnika($upisanaRijec)
{
    preg_match_all("/[bcčćdđfghjklmnprsštvzž]/i", $upisanaRijec, $brojSuglasnika);
    return count($brojSuglasnika[0]);
}
$suglasnici = brojanjeSuglasnika($upisanaRijec);

////////////////////////////////////////////////////////////////////////


?>
 

 <table>
        <tr style="text-transform: uppercase;">
            <th> Riječ </th>
            <th> Broj slova </th>
            <th> Broj samoglasnika </th>
            <th> Broj suglasnika </th>
        </tr>
        <tr>
            <td> <?php echo "$upisanaRijec" ?> </td>
            <td> <?php print_r (mb_strlen( $upisanaRijec)); ?>  </td> <!-- --Ovdje koristimo mb_strlen umjesto samo strlen tako da ne brojimo razmake -->
            <td> <?php echo $samoglasnici; ?>   </td>
            <td> <?php echo $suglasnici; ?> </td>
        </tr>
    </table>

 

</body>

<?php
//SPREMANJE U JSON

?>

</html>