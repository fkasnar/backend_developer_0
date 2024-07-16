<?php include_once '/var/www/backend_developer_0/napredni_php/views.file/partials/header.php' ?>

<main class="container my-3 d-flex flex-column flex-grow-1">
<div class="title flex-between">
        <h1>Primjerci</h1>
        <div class="action-buttons">
            <a href="/genre-create.php" type="submit" class="btn btn-primary">Dodaj novi</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Naziv Filma</th>
                <th>Medij</th>
                <th>Dostupna količina</th>
                <th>Uredi</th>
                <th>Obriši</th>
            </tr>
        </thead>
        <tbody>
        <?php include_once 'partials/searchbar_view.php' ?>
        <hr>
            <?php foreach ($copies as $copy): ?>
                <tr>
                    <td><?= $copy['naslov'] ?></td>
                    <td><?= $copy['tip'] ?></td>
                    <td><?= $copy['kolicina'] ?></td>
                    <td>
                        <a href="#" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Member"><i class="bi bi-pencil"></i></a>
                    </td>
                    <td>
                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Member"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>

<?php include_once 'partials/footer.php' ?>