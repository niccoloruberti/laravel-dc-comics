<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content d-flex justify-content-around align-items-center">
                    <div class="logo py-3">
                        <img src= "{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
                    </div>
                    <nav class="navbar navbar-expand">
                        <ul class="navbar-nav fs-6">
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">characters</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase  {{ Route::currentRouteName () === 'comics' ? 'fw-bold active' : '' }}" href="/">comics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">tv</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">games</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">collectibles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">videos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">fans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">news</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">shop</a>
                            </li>
                        </ul>
                    </nav>
                    <input class="form-control me-2 h-25 w-25" type="search" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </div>
    </div>
</header>