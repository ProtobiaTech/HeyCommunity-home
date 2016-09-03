@extends('layouts.default-home')

@section('content')
    <div id="main-carousel" class="carousel slide" data-interval="false" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            @include('home.items')
        </div>
    </div>
    <div class="main-carousel-bg"></div>
@endsection
