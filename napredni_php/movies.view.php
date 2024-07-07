<?php include_once '/var/www/backend_developer_0/napredni_php/partials/header.php' ?>

<main class="container my-3 d-flex flex-column flex-grow-1">
    <h1>Filmovi</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Naslov</th>
                <th>Godina</th>
                <th>Žanr</th>
                <th>Hit?</th>
                <th>Cijena</th>
                <th>Uredi</th>
                <th>Obriši</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $movie): ?>
                <tr>
                    <td><?= $movie['naslov'] ?></td>
                    <td><?= $movie['godina'] ?></td>
                    <td><?= $movie['Zanr'] ?></td>
                    <td><?= $movie['tip_filma'] ?></td>
                    <td><?= $movie['Cijena'] ?></td>
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