<div class="col m3">
    <div class="h-item">
        <div class="h-item-image-wrapper">
            <a href="{{route('shop.show', $product->id)}}">
                <div class="h-item-image-container">
                    <img class="h-item-image" src="{{ asset('images/'.$product->image_name) }}" alt="{{ $product->name }}"/>
                </div>
            </a>
            <div class="h-item-price-container">
                <div class="h-item-price">{{ presentPrice($product->price) }}</div>
            </div>
        </div>
        <div class="h-item-meta-wrapper">
            <a href="{{route('shop.show', $product->id)}}" class="theme-links">
                <div class="h-item-name">
                    {{ $product->brand }} {{  $product->name }} <br/>
                    {{ $product->description }}
                </div>
            </a>
            <div class="h-item-action">
                <div class="h-item-button-wrapper">
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