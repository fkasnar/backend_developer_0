<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni</title>
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
    
        <form method="post" action="/10-Parcijalni_ispit/parcijalni_ispit_json.php">
                    <label for="upisanarijec">Upišite riječ: </label><br>
                    <input type="text" id="upisanarijec" name="rijec" value="" placeholder="Random word"><br>
                    <input type="submit" value="Pošalji">
        </form>


        <?php

                $dataDir = __DIR__ . "/rijeci";
                const FILE_PATH = __DIR__ . "/querySave.json";

                //Provjera jel JSON file postoji, ako ne, kreirati ce ga.
                if (!file_exists(FILE_PATH)) {
                    file_put_contents(FILE_PATH, "[]");
                }

        ///////////////////////////////////////////////////////PISANJE U JSON


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Uzmi i enkodiraj u json
            function get_data($word) {
                // Provjeri jel json file postoji i procitaj ga
                $file_path = FILE_PATH; // Use constant for file path
                if (file_exists($file_path)) {
                    $existing_data = json_decode(file_get_contents($file_path), true);
                } else {
                    $existing_data = [];
                }

                // Dodaj riječ u array
                $existing_data[] = ['Rijec' => $word];

                // Vrati json encoded data
                return json_encode($existing_data, JSON_PRETTY_PRINT);
            }

                // Spremanje inputa iz forme u json.
                $rijec = ($_POST['rijec']);

                // Piši inpute u JSON
                if (file_put_contents(FILE_PATH, get_data($rijec))) {
                    echo 'Ispod je rješenje Vašeg upita.';
                } else {
                    echo 'Neuspješno, pokušajte ponovo.';
                }
            }

        ///////////////////////////////////////////////////////Čitanje JSONa


        function get_latest_word() {
            $file_path = FILE_PATH; // Use constant for file path

            // Čitanje JSON filea
            if (file_exists($file_path)) {
                $data = json_decode(file_get_contents($file_path), true);

            
            //Uzmi zadnji input unešen putem forme u JSON (radi obrade - izračuna)
            if (!empty($data)) {
                $last_entry = end($data);
                return $last_entry['Rijec'];
            }
            }

            return null;
        }

        $latest_word = get_latest_word();

        //IZRAČUN

        if ($latest_word !== null) {
            $brojslova = strlen($latest_word);

        //Suglasnici
        $samoSamoglasnici = preg_replace("/[^bcčćdđfgghjklmnpqrsštvzžBCČĆDĐFGGHJKLMPQRSŠTVZŽ]/u", "", $latest_word);
        $brojSamoglasnika = strlen($samoSuglasnici);

        //Samoglasnici
        $samoSuglasnici = preg_replace("/[^aeiouAEIOU]/u", "", $latest_word);
        $brojSuglasnika = strlen($samoSamoglasnici);


        }

        ?>


        <table>
            <tr>
                <th> RIJEČ </th>
                <th> BROJ SLOVA </th>
                <th> BROJ SUGLASNIKA </th>
                <th> BROJ SAMOGLASNIKA </th>
            </tr>
            <tr>
                <td><?php echo ' ' . $latest_word  ?></td>
                <td><?php echo ' ' . $brojslova  ?></td>
                <td><?php echo ' ' . strlen($samoSamoglasnici)  ?></td>
                <td><?php echo ' ' . strlen($samoSuglasnici) ?></td>
            </tr>
        </table>
    </body>
</html>


