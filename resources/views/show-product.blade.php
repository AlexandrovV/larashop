@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="s-item">
            <div class="row">
                <div class="col m4">
                    <h4 class="brown-text">{{ $product->brand }} {{ $product->name }}</h4>
                    <div class="s-item-image-container">
                        <img class="s-item-image" src="{{ asset('images/'.$product->image_name) }}" alt="{{ $product->name }}"/>
                    </div>
                </div>
                <div class="col m8">
                
                    <div class="s-item-info-container">
                        <div>
                            <h6>
                                <a href="{{route('shop.index')}}" class="breadcrumb">Home</a>
                                <a href="" class="breadcrumb">Categories</a>
                                <a href="{{route('shop.category.products', $product->category->id)}}" class="breadcrumb">{{ $product->category->name }}</a>
                                <span class="breadcrumb">{{ $product->brand }} {{ $product->name }}</span>
                            </h6>
                            <hr />
                        <div>
                        <div class="s-item-info">
                            <p class="brown-text"><b>Brand:</b> {{ $product->brand }}</p>
                            <p class="brown-text"><b>Name:</b> {{ $product->name }}</p>
                            <p class="brown-text"><b>Description:</b> {{ $product->description }}</p>
                            <p class="brown-text"><b>Category:</b> {{ $product->category->name }}</p>
                        </div>
                        <div class="s-item-price">{{ $product->formattedPrice() }}</div>
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
    <div class="row">
        <div>
            <h5 class="brown-text">You might also like</h5>
            <hr />
            <div class="top-mar">
                @foreach ($mightAlsoLike as $product)
                    @include('includes.homepage-item')
                @endforeach
            </div>
        <div>
    </div>
@endsection