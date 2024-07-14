
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
            <input type="number" min="1900" max="2099" step="1" value="2016" class="form-control" id="godina" name="godina"/>
        </div>

        <div class="">
            <label for="zanr_id" class="mt-1">Žanr</label>
        </div>
        <div class="">
        <select name="zanr_id" id="zanr_id">
            <option value="1">Akcija</option>
            <option value="9">Dokumentarni</option>
            <option value="3">Drama</option>
            <option value="8">Fantazija</option>
            <option value="4">Horor</option>
            <option value="2">Komedija</option>
            <option value="5">Romantika</option>
            <option value="6">Sci-Fi</option>
            <option value="7">Triler</option>
        </select>
        </div>

        <!-- <div class="col-auto">
            <label for="hit" class="mt-1">Hit</label>
        </div>
        <div class="">
        <select name="tip_filma" id="tip_filma">
            <option value="" disabled selected>Odaberi:</option>
            <option value="Hit">Hit</option>
            <option value="Ne-hit">Ne-hit</option>
            <option value="Stari">Stari</option>
        </select>
        </div> -->
       
        <div class="col-auto">
            <label for="cijena" class="mt-1">Cijena</label>
        </div>
        <div class="">
        <select name="cjenik_id" id="cjenik_id">
            <option value="" disabled selected>Odaberi cijenu:</option>
            <option value="1">5</option>
            <option value="2">3</option>
            <option value="3">1.5</option>
        </select>
        </div>
        <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Spremi</button>
        </div>
    </form>

</main>

<?php include_once 'partials/footer.php' ?>
