<?php include_once '/var/www/backend_developer_0/napredni_php/partials/header.php' ?>

<main class="container my-3 d-flex flex-column flex-grow-1">
    <h1>Žanrovi</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Redni broj</th>
                <th>Naziv Žanra</th>
                <th>Uredi</th>
                <th>Obriši</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($genres as $genre): ?>
                <tr>
                    <td><?= $genre['id'] ?></td>
                    <td><?= $genre['ime'] ?></td>
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