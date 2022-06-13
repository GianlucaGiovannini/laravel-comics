@extends('layouts.app')

@section('page-title')
{{$serie['series']}}
@endsection

@section('content')

@include('components.jumbotron')
<section class="single_serie">
    <div class="banner_single_serie mb-3">
        <div class="container">
            <div class="img_container">
                <img src="{{ $serie['thumb']}}">
                <div class="gallery text-uppercase">
                    view gallery
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 mb-3">
        <div class="row">
            <div class="col-8 desc">
                <h1>
                    {{$serie['title']}}
                </h1>
                <div class="price_availlable d-flex align-items-center">
                    <div class="price d-flex justify-content-between align-items-center">
                        <div class="left py-2 ps-3">
                            <span>U.S. Price: </span>
                            {{$serie['price']}}
                        </div>
                        <div class="right pe-3">
                            <span class="text-uppercase">
                                available
                            </span>
                        </div>
                    </div>
                    <div class="availlable d-flex justify-content-center align-items-center">
                        Check Availability
                    </div>
                </div>
                <div class="description py-3">
                    {{$serie['description']}}
                </div>
            </div>

            <div class="col-4 adv">
                <div class="advertisement">
                    advertisement
                    <img src="{{asset('img/adv.jpg')}}" alt="advertisement">
                </div>

            </div>
        </div>
    </div>

    <div class="specifics pt-4">
        <div class="container pb-5">
            <div class="row row-cols-1 row-cols-md-2">
                
                <div class="col talent">
                    <h3 class="pb-3 b_bottom_gray">Talent</h3>

                    <div class="art b_bottom_gray py-2">
                        <div class="art_by">
                            Art by:
                        </div>

                        <div class="artist">
                            @forelse($serie['artists'] as $artist)
                            <span class="color_custom">{{$artist}}</span>
                            @if(!$loop->last)
                            ,
                            @endif
                            @empty
                            <span>Non ci sono artisti da mostrare</span>
                            @endforelse
                        </div>

                    </div>

                    <div class="write b_bottom_gray py-2">
                        <div class="write_by">
                            Written by:
                        </div>

                        <div class="writer">
                            @forelse($serie['writers'] as $writer)
                            <span class="color_custom">{{$writer}}</span>
                            @if(!$loop->last)
                            ,
                            @endif
                            @empty
                            <span>Non ci sono scrittori da mostrare</span>
                            @endforelse
                        </div>

                    </div>

                </div>

                <div class="col specs">
                    <h3 class="pb-3 b_bottom_gray">Specs</h3>

                    <div class="pb-2 b_bottom_gray">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4 p-0">
                                    Serie:
                                </div>
                                <div class="col-8 p-0 color_custom text-uppercase">
                                    {{$serie['series']}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-2 b_bottom_gray">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4 p-0">
                                    U.S. Price: 
                                </div>
                                <div class="col-8 p-0">
                                    {{$serie['price']}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-2 b_bottom_gray">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4 p-0">
                                    On Sale Date.:
                                </div>
                                <div class="col-8 p-0">
                                    {{date_format(date_create_from_format("Y-m-d", $serie['sale_date']), "M d Y")}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="banner_specifics b_top_gray mt-5">
            <div class="container">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col p-2 d-flex justify-content-between text-uppercase b_left_gray">
                    <div>
                        Digital comics  
                    </div>
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                </div>
                <div class="col p-2 d-flex justify-content-between text-uppercase b_left_gray">
                    <div>
                        shop dc 
                    </div>
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                </div>
                <div class="col p-2 d-flex justify-content-between text-uppercase b_left_gray">
                    <div>
                        comic shop locator  
                    </div>
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                </div>
                <div class="col p-2 d-flex justify-content-between text-uppercase b_left_gray b_right_gray">
                    <div>
                        subscriptions   
                    </div>
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                </div>
            </div>
            </div>
        </div>
    </div>
</section>


@endsection