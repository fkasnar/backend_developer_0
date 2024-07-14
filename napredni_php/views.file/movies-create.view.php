
<?php include_once 'partials/header.php' ?>

<main class="container my-3 d-flex flex-column flex-grow-1 vh-100">
    <h1>Dodaj novi Film</h1>
    <hr>

    <form class="row g-3 mt-3" action="../controllers/movies-create.php" method="POST">
        <div class="col-auto">
            <label for="naslov" class="mt-1">Naslov Filma</label>
        </div>
        <div class="">
            <input type="text" class="form-control" id="naslov" name="naslov"><!--  $_POST['zanr'] => 'Novi zanr'; -->
        </div>
        <div class="col-auto">
            <label for="godina" class="mt-1">Godina</label>
        </div>
        <div class="">
            <input type="date" class="form-control" id="godina" name="godina"><!--  $_POST['zanr'] => 'Novi zanr'; -->
        </div>

        <div class="">
            <label for="zanr" class="mt-1">Žanr</label>
        </div>
        <div class="">
        <select name="zanr" id="zanr">
            <option value="Akcija">Akcija</option>
            <option value="Dokumentarni">Dokumentarni</option>
            <option value="Drama">Drama</option>
            <option value="Fantazija">Fantazija</option>
            <option value="Horor">Horor</option>
            <option value="Komedija">Komedija</option>
            <option value="Romantika">Romantika</option>
            <option value="Sci-Fi">Sci-Fi</option>
            <option value="Triler">Triler</option>
        </select>
        </div>

        <div class="col-auto">
            <label for="hit" class="mt-1">Hit</label>
        </div>
        <div class="">
        <select name="tip_filma" id="tip_filma">
            <option value="Hit">Hit</option>
            <option value="Ne-hit">Ne-hit</option>
            <option value="Stari">Stari</option>
        </select>
        </div>

        <div class="col-auto">
            <label for="cijena" class="mt-1">Cijena</label>
        </div>
        <div class="">
        <input type="text" class="form-control" id="cijena" name="cijena"><!--  $_POST['zanr'] => 'Novi zanr'; -->
        </div>
       
        
        <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Spremi</button>
        </div>
    </form>

</main>

<?php include_once 'partials/footer.php' ?>
