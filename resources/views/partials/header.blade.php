<header>
    <!-- Header Top Bar -->
    <div class="container-fluid header-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="primary-color m-1">
                        <li>DC POWER&#8480; VISA&#174;</li>
                        <li>
                            <span>ADDITIONAL DC SITES</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Bar -->
    <div class="container header-bottom-bar">
        <div class="row">
            <!-- Header Logo Col -->
            <div class="col-2 py-4">
                <!-- Header Logo -->
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
            </div>
            <!-- Header NavBar Col -->
            <div class="col-8">
                <!-- Header NavBar List -->
                <ul class="d-flex w-100 h-100">
                    <li class="h-100">
                        <a href="{{ Route('home') }}">CHARACTERS</a>
                    </li>
                    <li class="active h-100">
                        <a href="{{ Route('home') }}">COMICS</a>
                    </li>
                    <li class="h-100">
                        <a href="{{ Route('home') }}">MOVIES</a>
                    </li>
                    <li class="h-100">
                        <a href="{{ Route('home') }}">TV</a>
                    </li>
                    <li class="h-100">
                        <a href="{{ Route('home') }}">GAMES</a>
                    </li>
                    <li class="h-100">
                        <a href="{{ Route('home') }}">COLLECTIBLES</a>
                    </li>
                    <li class="h-100">
                        <a href="{{ Route('home') }}">VIDEOS</a>
                    </li>
                    <li class="h-100">
                        <a href="{{ Route('home') }}">FANS</a>
                    </li>
                    <li class="h-100">
                        <a href="{{ Route('home') }}">NEWS</a>
                    </li>
                    <li class="h-100">
                        <a href="{{ Route('home') }}">SHOP</a>
                        <i class="fa-solid fa-caret-down"></i>
                    </li>
                </ul>
            </div>
            <!-- Header SearchBar Col -->
            <div class="col-2 d-flex align-items-center">
                <!-- Header SearchBar -->
                <div class="search-bar ms-5">
                    <span class="fw-bold">Search</span>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </div>
</header>