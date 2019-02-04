@extends('layouts.app')

@section('content')
    <div class="cart">
        <h4 class="brown-text">Shopping Cart</h4>
        <hr />
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
        @if (Cart::count() > 0)
        
            @foreach (Cart::content() as $item)
                <div class="cart-item">
                    <div class="row">
                        <div class="col m2">
                            <a href="{{ route('shop.show', $item->model->id) }}">
                                <div class="cart-item-image-container">
                                    <img src="{{asset('images/'.$item->model->image_name)}}" alt="iphone" class="cart-item-image"> 
                                </div>
                            </a>
                        </div>
                        <div class="col m6">
                            <div class="cart-item-info">
                                <a href="#" class="theme-links">{{ $item->model->brand }} {{ $item->model->name }}</a>
                                <p> {{ $item->model->description }}</p>
                                <p><b>Product Code: {{ $item->model->id }}</b></p>
                            </div>
                        </div>
                        <div class="col m1">
                            <div class="cart-item-quantity">
                                <input type="number" max="5" min="0" value="1" disabled/>
                            </div>
                        </div>
                        <div class="col m2">
                            <div class="cart-item-price">
                                {{ number_format($item->model->price, 0, ",", " ") }} ₸
                            </div>
                        </div>
                        <div class="col m1">
                            <div class="cart-item-actions">
                                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn brown darken-1"><i class="material-icons">close</i></button><br/><br/>
                                </form>
                                <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn brown darken-1"><i class="material-icons">access_time</i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
            @endforeach

            <div class="cart-total-wrapper">
                <div class="row">
                    <div class="col m8"></div>
                    <div class="col m4">
                        <div class="cart-total">
                            Total price: {{ Cart::total() }} ₸
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="cart-no-items">
                <h5 class="brown-text text-center">No items in cart </h5>
                <a href="{{ route('shop.index') }}" class="btn brown darken-1">Continue Shopping </a>
            </div>
        @endif
    </div>



    <div class="cart">
            <h4 class="brown-text">Saved For Later</h4>
            <hr />
            @if (Cart::instance('saveForLater')->count() > 0)
            
                @foreach (Cart::instance('saveForLater')->content() as $item)
                    <div class="cart-item">
                        <div class="row">
                            <div class="col m2">
                                <a href="{{ route('shop.show', $item->model->id) }}">
                                    <div class="cart-item-image-container">
                                        <img src="{{asset('images/'.$item->model->image_name)}}" alt="iphone" class="cart-item-image"> 
                                    </div>
                                </a>
                            </div>
                            <div class="col m7">
                                <div class="cart-item-info">
                                    <a href="#" class="theme-links">{{ $item->model->brand }} {{ $item->model->name }}</a>
                                    <p> {{ $item->model->description }}</p>
                                    <p><b>Product Code: {{ $item->model->id }}</b></p>
                                </div>
                            </div>
                            <div class="col m2">
                                <div class="cart-item-price">
                                    {{ number_format($item->model->price, 0, ",", " ") }} ₸
                                </div>
                            </div>
                            <div class="col m1">
                                <div class="cart-item-actions">
                                    <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn brown darken-1"><i class="material-icons">close</i></button><br/><br/>
                                    </form>
                                    <form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $item->model->id}}">
                                        <input type="hidden" name="name" value="{{ $item->model->name}}">
                                        <input type="hidden" name="price" value="{{ $item->model->price}}">
                                        <button type="submit" class="btn brown darken-1"><i class="material-icons">add_shopping_cart</i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                @endforeach
            @else
                <div class="cart-no-items">
                    <h5 class="brown-text text-center">No items saved for later </h5>
                </div>
            @endif
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