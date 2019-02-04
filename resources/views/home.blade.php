@extends('layouts.app')

@section('content')
    <div class="row top-mar">
        <div class="slider">
            <ul class="slides">
                <li><img src="images/slider1.png"></li>
                <li><img src="images/slider2.jpg"></li>
                <li><img src="images/slider3.jpg"></li>
                <li><img src="images/slider4.jpg"></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div>
            <h5 class="brown-text">What's hot?</h5>
            <hr />
            <div class="top-mar">
                @foreach ($popular as $product)
                    @include('includes.homepage-item')
                @endforeach
            </div>
        <div>
        <div>
            <h5 class="brown-text">Newest offers</h5>
            <hr/>
            <div class="top-mar">
                @foreach ($newest as $product)
                    @include('includes.homepage-item')
                @endforeach
            </div>
        <div>
    </div>
@endsection
