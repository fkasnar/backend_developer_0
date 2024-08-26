<?php include_once base_path('views/partials/header.php'); ?>

<main class="container my-3 d-flex flex-column flex-grow-1">
    <div class="title flex-between">
        <h1>Cjenik</h1>
        <div class="action-buttons">
            <a href="/prices/create" type="submit" class="btn btn-primary">Dodaj novi</a>
        </div>
    </div>

    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tip filma</th>
                <th>Cijena</th>
                <th>Zakasnina</th>
                <th class="table-action-col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prices as $price): ?>
                <tr>
                    <td><?= $price['tip_filma'] ?></td>
                    <td><?= $price['cijena'] ?></td>
                    <td><?= $price['zakasnina_po_danu'] ?></td>
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