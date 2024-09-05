<nav class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 <?= setActiveClass("/") ?>" <?= setAriaCurent("/") ?>>Home</a></li>
                <li><a href="/dashboard" class="nav-link px-2 <?= setActiveClass("/dashboard") ?>" <?= setAriaCurent("/dashboard") ?>>Dashboard</a></li>
                <li><a href="/rentals" class="nav-link px-2 <?= setActiveClass("/rentals") ?>" <?= setAriaCurent("/rentals") ?>>Posudbe</a></li>
                <li><a href="/members" class="nav-link px-2 <?= setActiveClass("/members") ?>" <?= setAriaCurent("/members") ?>>Clanovi</a></li>
                <li><a href="/genres" class="nav-link px-2 <?= setActiveClass("/genres") ?>" <?= setAriaCurent("/genres") ?>>Zanrovi</a></li>
                <li><a href="/movies" class="nav-link px-2 <?= setActiveClass("/movies") ?>" <?= setAriaCurent("/movies") ?>>Filmovi</a></li>
                <li><a href="/prices" class="nav-link px-2 <?= setActiveClass("/prices") ?>" <?= setAriaCurent("/prices") ?>>Cjenik</a></li>
                <li><a href="/formats" class="nav-link px-2 <?= setActiveClass("/formats") ?>" <?= setAriaCurent("/formats") ?>>Mediji</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <?php echo "Pozdrav " . $_SESSION['user']['ime']; ?>
                <a href="/logout" type="button" class="btn btn-primary me-2">Logout</a>                
            </div>
        </div>
    </div>
</nav>
