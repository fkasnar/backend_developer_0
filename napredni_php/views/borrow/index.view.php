<?php include_once base_path('views/partials/header.php'); ?>

<main class="container my-3 d-flex flex-column flex-grow-1">
    <div class="title flex-between">
        <h1>Posudbe</h1>
        <div class="action-buttons">
            <a href="/borrow/create" type="submit" class="btn btn-primary">Dodaj novi</a>
        </div>
    </div>

    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID posudbe</th>
                <th>Datum posudbe</th>
                <th>Clan ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Film</th>
                <th>Cijena</th>
                <th class="table-action-col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($borrow as $borrow1): ?>
                <tr>
                    <td><?= $borrow1['posudba_id'] ?></td>
                    <td><?= $borrow1['datum_posudbe'] ?></td>
                    <td><?= $borrow1['clan_id'] ?></td>
                    <td><?= $borrow1['ime'] ?></td>
                    <td><?= $borrow1['prezime'] ?></td>
                    <td><?= $borrow1['film'] ?></td>
                    <td><?= $borrow1['cijena'] ?></td>
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