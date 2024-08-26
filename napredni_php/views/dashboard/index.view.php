<?php include_once base_path('views/partials/header.php'); ?>

<main class="container my-3 d-flex flex-column flex-grow-1">
    <div class="title flex-between">
        <h2>Nova posudba</h2>
        <div class="action-buttons">
            <a href="/dashboard/create" type="submit" class="btn btn-primary">Dodaj</a>
        </div>
    </div>

    <hr>
<br><br><br><br>
    <h2>Aktivne posudbe</h2>
    
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
            <?php foreach ($activeBorrow as $activeB): ?>
                <tr>
                    <td><?= $activeB['posudba_id'] ?></td>
                    <td><?= $activeB['datum_posudbe'] ?></td>
                    <td><?= $activeB['clan_id'] ?></td>
                    <td><?= $activeB['ime'] ?></td>
                    <td><?= $activeB['prezime'] ?></td>
                    <td><?= $activeB['film'] ?></td>
                    <td><?= $activeB['cijena'] ?></td>
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