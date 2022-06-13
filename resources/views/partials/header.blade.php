<header>

    <div class="header_banner">
        <div class="container d-flex justify-content-end py-2">
            <a href="#">DC power visa&reg;</a>
            <a href="#">Additional dc sites</a>
        </div>
    </div>
    <nav>
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-12 col-lg-2 col-xl-3 text-center pt-2  text-lg-start p-lg-0">
                    <a class="logo" href="{{route('home')}}">
                        <img src="{{asset('img/dc-logo.png')}}" alt="logo DC Comics">
                    </a>
                </div>
                <div class="col-12 col-lg-10 col-xl-9 d-flex justify-content-end align-items-center flex-wrap gap-3 p-relative">
                    <a href="#" class="text-uppercase menu">
                        character
                    </a>
                    <a href="{{route('home')}}" class="text-uppercase menu {{Route::currentRouteName() === 'home' || Route::currentRouteName() === 'components.single_serie' ? 'active' : '' }} ">
                        comics
                    </a>
                    <a href="#" class="text-uppercase menu">
                        movies
                    </a>
                    <a href="#" class="text-uppercase menu">
                        tv
                    </a>
                    <a href="#" class="text-uppercase menu">
                        games
                    </a>
                    <a href="#" class="text-uppercase menu">
                        collectibles
                    </a>
                    <a href="#" class="text-uppercase menu">
                        videos
                    </a>
                    <a href="#" class="text-uppercase menu">
                        fan
                    </a>
                    <a href="#" class="text-uppercase menu">
                        news
                    </a>
                    <a href="#" class="text-uppercase menu">
                        shop
                    </a>
                    <input type="text" placeholder="Search">
                    <img class="search-img" src="{{asset('img/search.png')}}">
                </div>
            </div>
        </div>
    </nav>
</header>