@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col m3">
            <h4 class="brown-text">
                @if ($category != null) {{ $category->name }} @else All products @endif
            </h4>
            @include('includes.sidebar')
        </div>
        <div class="col m9">
            <h5>
                <a href="{{route('shop.index')}}" class="breadcrumb">Home</a>
                <a href="#" class="breadcrumb">Categories</a>
                <span class="breadcrumb">@if ($category != null) {{ $category->name }} @else All products @endif</span>
            </h5>
            <hr />
            @foreach ($products as $product)
                <div class="l-item">
                    <div class="row">
                        <div class="col m3">
                            <a href="{{route('shop.show', $product->id)}}">
                                <div class="l-item-image-container">
                                    <img src="{{ asset('images/'.$product->image_name) }}" class="l-item-image"/>
                                </div>
                            </a>
                        </div>
                        <div class="col m6 brown-text">
                            <div class="l-item-info">
                                <h6><a href="{{route('shop.show', $product->id)}}" class="theme-links">{{ $product->brand }} {{ $product->name }}</a></h6>
                                
                                <p><b>Product code: {{ $product->id }}</b>
                                    <br />{{ $product->description }}</p>
                            </div>
                        </div>
                        <div class="col m3">
                            <div class="l-item-actions">
                                <div class="l-item-price-container">
                                    <div class="l-item-price">{{ $product->formattedPrice() }}</div>
                                </div>
                                <div class="l-item-button-wrapper">
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $product->id}}">
                                        <input type="hidden" name="name" value="{{ $product->name}}">
                                        <input type="hidden" name="price" value="{{ $product->price}}">
                                        <button type="submit" class="waves-effect waves-light btn brown darken-1">Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection