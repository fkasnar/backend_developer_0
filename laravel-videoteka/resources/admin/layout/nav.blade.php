<div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="/dashboard" class="nav-link px-2 text-{{request()->is('dashboard') ? 'secondary' : 'white'}}">Nadzorna ploča</a></li>           
            <li><a href="/rentals" class="nav-link px-2 text-{{request()->is('rentals') ? 'secondary' : 'white'}}">Posudbe</a></li>           
            <li><a href="/users" class="nav-link px-2 text-{{request()->is('users') ? 'secondary' : 'white'}}">Članovi</a></li>
            <li><a href="/movies" class="nav-link px-2 text-{{request()->is('movies') ? 'secondary' : 'white'}}">Filmovi</a></li>
            <li><a href="/genres" class="nav-link px-2 text-{{request()->is('genres') ? 'secondary' : 'white'}}">Žanrovi</a></li>
            <li><a href="/prices" class="nav-link px-2 text-{{request()->is('prices') ? 'secondary' : 'white'}}">Cjenik</a></li>
            <li><a href="/formats" class="nav-link px-2 text-{{request()->is('formats') ? 'secondary' : 'white'}}">Mediji</a></li>
            <li><a href="/copies" class="nav-link px-2 text-{{request()->is('copies') ? 'secondary' : 'white'}}">Količine</a></li>           
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
            @auth
                <div class="dropdown">
                    <a href="#" class="d-flex p-1 align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://logosandtypes.com/wp-content/uploads/2023/12/Algebra.png" alt="A" width="32" height="32" class="rounded-circle me-2">
                        <strong>{{ auth()->user()->fullName() }}</strong> 
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form class="ml-2 p-2 d-inline" action="/logout" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary me-2">Logout</a>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth

            @guest
                <a href="{{ route('login.show') }}" type="button" class="btn btn-primary me-2">Login</a>
                <a href="{{ route('register.create') }}" type="button" class="btn btn-warning">Sign-up</a>
            @endguest              
        </div>
    </div>
</div>