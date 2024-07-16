<?php include_once 'partials/header.php' ?>

<main class="container my-3 d-flex flex-column flex-grow-1">
    <div class="title flex-between">
        <h1>Žanrovi</h1>
        <div class="action-buttons">
            <a href="/controllers/genre-create.php" type="submit" class="btn btn-primary">Dodaj novi</a>
        </div>
    </div>

    <?php include_once 'partials/searchbar_view.php' ?>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ime</th>
                <th>Uredi</th>
                <th>Obriši</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($genres as $genre): ?>
                <tr>
                    <td><?= $genre['id'] ?></td>
                    <td><a href="/genre-show.php?id=<?= $genre['id'] ?>"><?= $genre['ime'] ?></a></td>
                    <td class="table-action-col">
                        <a href="#" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Uredi Zanr"><i class="bi bi-pencil"></i></a>
                        </td>
                        <td>
                        <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Obrisi Zanr"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>

<?php include_once 'partials/footer.php' ?>