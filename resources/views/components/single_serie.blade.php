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
</section>


@endsection