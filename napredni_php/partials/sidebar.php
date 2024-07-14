<aside class="d-flex flex-column p-3 text-bg-dark vh-100-min" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Videoteka Admin</span>
    </a>

    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/" class="nav-link text-white link-primary <?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>" aria-current="page"><i class="bi bi-house me-2"></i>Home</a>
        </li>
        <li class="nav-item">
            <a href="members.php" class="nav-link text-white link-primary <?= $_SERVER['REQUEST_URI'] === '/controllers/members.php' ? 'active' : '' ?>" aria-current="page"><i class="bi bi-person-circle me-2"></i>Članovi</a>
        </li>
        <li class="nav-item">
            <a href="genres.php" class="nav-link text-white link-primary <?= $_SERVER['REQUEST_URI'] === '/genres.php' ? 'active' : '' ?>" aria-current="page"><i class="bi bi-camera-reels me-2"></i>Žanrovi</a>
        </li>
        <li class="nav-item">
            <a href="movies.php" class="nav-link text-white link-primary <?= $_SERVER['REQUEST_URI'] === '/movies.php' ? 'active' : '' ?>" aria-current="page"><i class="bi bi-film me-2"></i>Filmovi i Cijenik</a>
        </li>
        <li class="nav-item">
            <a href="lend.php" class="nav-link text-white link-primary <?= $_SERVER['REQUEST_URI'] === '/lend.php' ? 'active' : '' ?>" aria-current="page"><i class="bi bi-calendar me-2"></i>Posudbe</a>
        </li>
        <li class="nav-item">
            <a href="copies.php" class="nav-link text-white link-primary <?= $_SERVER['REQUEST_URI'] === '/copies.php' ? 'active' : '' ?>" aria-current="page"><i class="bi bi-clipboard-data me-2"></i>Primjerci</a>
        </li>
    </ul>



</aside>