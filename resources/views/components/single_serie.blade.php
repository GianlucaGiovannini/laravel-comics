@extends('layouts.app')

@section('page-title')
    {{$serie['series']}}
@endsection

@section('content')

@include('components.jumbotron')

<div class="banner_single_serie">
    <div class="container position-relative">
        <div class="img_container">
            <img src="{{ $serie['thumb']}}">
            <div class="gallery text-uppercase">
                view gallery
            </div>
        </div>
    </div>
</div>

<div class="container">
   <div class="row"> 
    <div class="col-7 desc">
    <h1>
        {{$serie['title']}}
    </h1>
    </div>

    <div class="col-5 advertisement">
        <img src="{{asset('img/adv.jpg')}}" alt="advertisement">
    </div>
   </div>
</div>
    
@endsection
