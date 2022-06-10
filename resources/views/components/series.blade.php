<div class="main_section">
    <div class="container text-white py-4 position-relative">
        <div class="current_series text-uppercase text-white fw-bold px-4 py-2">
            current series
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 px-2 py-3 g-4 text-center text-sm-start">

            @forelse ($series as  $index => $serie)
            <a href="{{Route('components.single_serie', $index)}}">
                <div class="col series">
                    <div class="series_img">
                        <img src="{{ $serie['thumb'] }}">
                    </div>
                    <div class="category text-uppercase py-3">
                        {{$serie['series']}}
                    </div>
                </div>
                @empty
                <div class="col series">
                    <p>Nessuna serie da mostrare</p>
                </div>
            </a>

            @endforelse
        </div>
        <div class="more text-center">
            <button class="btn-more text-uppercase text-white fw-bold border-0 px-5 py-2">Load More</button>
        </div>
    </div>
</div>