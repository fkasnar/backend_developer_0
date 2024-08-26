<?php include_once base_path('views/partials/header.php'); ?>

<main class="container my-3 d-flex flex-column flex-grow-1 vh-100">
    <h1><?= $genre['ime'] ?></h1>
    <hr>
    <form class="row g-3 mt-3" action="/genre-create.php" method="POST">
        <div class="row">
            <div class="col-2">
                <label for="zanr" class="mt-1">Id Zanra:</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="zanr" name="zanr" value="<?= $genre['id'] ?>" disabled>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="zanr" class="mt-1">Naziv Zanra:</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="zanr" name="zanr" value="<?= $genre['ime'] ?>" disabled>
            </div>
        </div>
    </form>

    <form>
        <hr>
        <h2>Filmovi u žanru <?= lcfirst($genre['ime']) ?>: </h2>
    </form>


    // Prikaz filmova po žanru - treba staviti u query varijablu za žanr ovisno na kojem smo tabu
    
<?php
/*     use Core\Database;

    if (!isset($_GET['id'])) {
        abort();
    }

    $db = Database::get();

    $sql = 'SELECT f.naslov, f.godina, z.ime AS zanr
    FROM filmovi f
    JOIN zanrovi z ON f.zanr_id = z.id
    WHERE z.ime = 'Drama';';

    $genre = $db->query($sql, ['id' => $_GET['id']])->findOrFail(); */
?>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Naslov</th>
                <th>Godina</th>
                <th>Žanr</th>
                <th class="table-action-col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recomendations as $recomended): ?>
                <tr>
                    <td><?= $recomended['naslov'] ?></td>
                    <td><?= $recomended['godina'] ?></td>
                    <td><?= $recomended['zanr'] ?></td>
                    <td>
                        <a href="#" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Movie"><i class="bi bi-pencil"></i></a>
                        <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Movie"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


</main>

<?php include_once base_path('views/partials/footer.php'); ?>