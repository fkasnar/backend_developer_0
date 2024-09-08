<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?? 'Videoteka Admin' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/public/assets/styles.css">
  </head>
  <body>



<aside class="d-flex flex-column p-3 text-bg-dark vh-100-min" style="width: 280px;">
    

    <div class="sidebar_position">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-auto me-md-auto text-white text-decoration-none">
        <span class="fs-4">Videoteka Admin</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/" class="nav-link text-white link-primary <?= setActiveClass('/') ?>" <?= setAriaCurent('/') ?>>
                <i class="bi bi-house me-2"></i>Home
            </a>
        </li>
        <li class="nav-item">
            <a href="/dashboard" class="nav-link text-white link-primary <?= setActiveClass('/dashboard') ?>" <?= setAriaCurent('/dashboard') ?>>
                <i class="bi bi-clipboard-pulse me-2"></i>Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="/rentals" class="nav-link text-white link-primary <?= setActiveClass('/rentals') ?>" <?= setAriaCurent('/rentals') ?>>
                <i class="bi bi-credit-card me-2"></i>Posudbe
            </a>
        </li>
        <li class="nav-item">
            <a href="/members" class="nav-link text-white link-primary <?= setActiveClass('/members') ?>" <?= setAriaCurent('/members') ?>>
                <i class="bi bi-person-circle me-2"></i>Clanovi
            </a>
        </li>
        <li class="nav-item">
            <a href="/genres" class="nav-link text-white link-primary <?= setActiveClass('/genres') ?>" <?= setAriaCurent('/genres') ?>>
                <i class="bi bi-camera-reels me-2"></i>Zanrovi
            </a>
        </li>
        <li class="nav-item">
            <a href="/movies" class="nav-link text-white link-primary <?= setActiveClass('/movies') ?>" <?= setAriaCurent('/movies') ?>>
                <i class="bi bi-film me-2"></i>Filmovi
            </a>
        </li>
        <li class="nav-item">
            <a href="/prices" class="nav-link text-white link-primary <?= setActiveClass('/prices') ?>" <?= setAriaCurent('/prices') ?>>
                <i class="bi bi-currency-euro me-2"></i>Cjenik
            </a>
        </li>
        <li class="nav-item">
            <a href="/formats" class="nav-link text-white link-primary <?= setActiveClass('/formats') ?>" <?= setAriaCurent('/formats') ?>>
                <i class="bi bi-disc me-2"></i>Mediji
            </a>
        </li>
    </ul>
    <hr>
    </div>


</aside>
