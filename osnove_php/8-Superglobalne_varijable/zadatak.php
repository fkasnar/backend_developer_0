<!DOCTYPE html>
<html>
<body>

<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
            color: grey;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        form {
            
            padding: 20px;
            border-radius: 20px;
            transform: scale(1.3);
            background-color: #333;
            color: grey;
        }

        form input, form textarea, form select, form button {
            border-radius: 10px;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid grey;
            background-color: #444;
            color: grey;
        }
        
        form button {
            background-color: grey;
            color: black;
            cursor: pointer;
        }

        form button:hover {
            background-color: lightgrey;
        }
    </style>


<!-- //PHP POST VJEŽBA
Kreirajte datoteku obrazac.php i kreirajte obrazac (vidi sliku). 
Obrazac treba poslati podatke na obradu datoteci obrada.php.

- Kreirajte datoteku obrada.php i unutar nje
dohvatite podatke iz obrasca i obradite ih
na sljedeći način:
                - Provjerite postoje li podaci i, ako ih
                nema, ispišite poruku da nema
                podataka za obradu.

                - Provjerite pojedinačne podatke i,
                ako postoje, ispišite ih, a ako ne 
                postoje ispišite poruku da nema
                podatka. -->

<form method="post" action="/8-Superglobalne_varijable/zadatak_obrada.php">
  <label for="first_name">Ime: </label><br>
  <input type="text" id="first_name" name="first_name" value="" placeholder="Vaše Ime"><br>
  <label for="last_name">Prezime: </label><br>
  <input type="text" id="last_name" name="last_name" value="" placeholder="Vaše Prezime"><br><br>
  <input type="submit" value="Pošalji">
</form> 


</body>
</html>