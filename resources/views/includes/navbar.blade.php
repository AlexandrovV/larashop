<nav class="brown darken-1">
    <div class="container">
        <div class="nav-wrapper header">
        <a href="{{route('shop.index')}}" class="brand-logo left">LARASHOP</a>

            <ul class="right">
                <li>
                    <a class="dropdown-trigger" data-target="dropdown1"><i class="material-icons left">menu</i> Catalogue</a>
                </li>
                {{-- <li><a href="#"><i class="material-icons left">account_circle</i>Cabinet</a></li> --}}
                <li>
                    <a href="{{route('cart.index')}}">
                        <i class="material-icons left">shopping_cart</i>
                        Shopping cart 
                        @if (Cart::instance('default')->count() > 0)
                            <span class="new badge brown lighten-5 brown-text" data-badge-caption="">{{ Cart::instance('default')->count() }}</span>
                        @endif
                        
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<ul id="dropdown1" class="dropdown-content catalogue">
    <li><a href="{{route('shop.all.products')}}" class="theme-links">All products</a></li>
    <li class="divider" tabindex="-1"></li>
    @foreach ($categories as $category)
        <li><a href="{{route('shop.category.products', $category->id)}}" class="theme-links">{{ $category->name }}</a></li>
    @endforeach
</ul>
{{-- 
    <ul style="margin-left: 200px">
        <li>
            <form>
                <div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
                </div>
            </form>
        </li>
    </ul>
 --}}