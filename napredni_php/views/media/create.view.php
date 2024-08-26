<?php include_once base_path('views/partials/header.php'); ?>

<main class="container my-3 d-flex flex-column flex-grow-1 vh-100">
    <div class="title flex-between">
        <h1>Dodaj novi medij</h1>
        <div class="action-buttons">
        </div>
    </div>
    <hr>
    <form class="row g-3 mt-3" action="/movies/store" method="POST">
        <div class="col-md-6">
            <label for="title" class="form-label">Tip</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Tip" required>
        </div>
        <div class="col-md-6">
            <label for="number" class="form-label">Koeficijent</label>
            <input type="text" class="form-control" id="number" name="number" placeholder="Koeficijent" required>
        </div>
        <div class="col-12 d-flex mt-4 justify-content-between">
            <a href="/prices" class="btn btn-primary mb-3">Povratak</a>
            <button type="submit" class="btn btn-success mb-3">Spremi</button>
        </div>
    </form>
</main>

<?php include_once base_path('views/partials/footer.php'); ?>