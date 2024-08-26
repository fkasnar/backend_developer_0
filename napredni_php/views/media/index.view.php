<?php include_once base_path('views/partials/header.php'); ?>

<main class="container my-3 d-flex flex-column flex-grow-1">
    <div class="title flex-between">
        <h1>Mediji</h1>
        <div class="action-buttons">
            <a href="/media/create" type="submit" class="btn btn-primary">Dodaj novi</a>
        </div>
    </div>

    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tip</th>
                <th>Koeficijent</th>
                <th class="table-action-col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medias as $media): ?>
                <tr>
                    <td><?= $media['id'] ?></td>
                    <td><?= $media['tip'] ?></td>
                    <td><?= $media['koeficijent'] ?></td>
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