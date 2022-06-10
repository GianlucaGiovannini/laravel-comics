@extends('layouts.app')

@section('page-title')
    Comics
@endsection

@section('content')

    @include('components.jumbotron')

    @include('components.series') 

    @include('components.merc_banner')
    
@endsection
