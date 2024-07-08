<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clanovi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/styles.css">
  </head>
  <body>
    <div class="page-wrapper d-flex h-100">

        <?php include_once 'sidebar.php' ?>
        
        <div class="content d-flex flex-column flex-grow-1">
            <?php include_once 'nav.php' ?>


            <div class="manage">
            <div class="manage2">
            <div>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                  <input type="search" class="form-control1 form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form>
                </div>
                <button type="button" class="btn btn-warning spacing">Traži</button>
                
                
                <a href="#" class="d-flex p-1 align-items-center text-decoration-none  text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-layer-backward rounded-circle me-2 align-items-center spacing" width="32" height="32"></i>
                    Razvrstaj
                </a>
                
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Silazno</a></li>
                    <li><a class="dropdown-item" href="#">Uzlazno</a></li>
                </ul>
                </div>
</aside>   