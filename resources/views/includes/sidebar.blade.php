<div>
    <div class="collection">
            <a href="{{route('shop.all.products')}}" class="collection-item category-name theme-links" >All products</a>
        @foreach ($categories as $category)
            <a href="{{route('shop.category.products', $category->id)}}" class="collection-item category-name theme-links" >{{ $category->name }}</a>
        @endforeach
    </div>
</div>