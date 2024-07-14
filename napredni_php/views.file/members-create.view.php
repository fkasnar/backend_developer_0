
<?php include_once 'partials/header.php' ?>

<main class="container my-3 d-flex flex-column flex-grow-1 vh-100">
    <h1>Dodaj novog člana</h1>
    <hr>

    <form class="row g-3 mt-3" action="../controllers/members-create.php" method="POST">
        <div class="col-auto">
            <label for="ime" class="mt-1">Ime člana:</label>
        </div>
        <div class="">
            <input type="text" class="form-control" id="ime" name="ime"><!--  $_POST['zanr'] => 'Novi zanr'; -->
        </div>
        <div class="col-auto">
            <label for="prezime" class="mt-1">Prezime člana:</label>
        </div>
        <div class="">
            <input type="text" class="form-control" id="prezime" name="prezime"><!--  $_POST['zanr'] => 'Novi zanr'; -->
        </div>
        <div class="col-auto">
            <label for="adresa" class="mt-1">Adresa:</label>
        </div>
        <div class="">
            <input type="text" class="form-control" id="adresa" name="adresa"><!--  $_POST['zanr'] => 'Novi zanr'; -->
        </div>
        <div class="col-auto">
            <label for="telefon" class="mt-1">Telefon</label>
        </div>
        <div class="">
            <input type="text" class="form-control" id="telefon" name="telefon"><!--  $_POST['zanr'] => 'Novi zanr'; -->
        </div>
        <div class="col-auto">
            <label for="email" class="mt-1">Email:</label>
        </div>
        <div class="">
            <input type="email" class="form-control" id="email" name="email"><!--  $_POST['zanr'] => 'Novi zanr'; -->
        </div>
        <div class="col-auto">
            <label for="clanski_broj" class="mt-1">Članski broj:</label>
        </div>
        <div class="">
            <input type="text" class="form-control" id="clanski_broj" name="clanski_broj"><!--  $_POST['zanr'] => 'Novi zanr'; -->
        </div>
        
       
        
        <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Spremi</button>
        </div>
    </form>

</main>

<?php include_once 'partials/footer.php' ?>
