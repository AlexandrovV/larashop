<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class PageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'categories' => Category::all(), 
            'popular' => Product::popular(),
            'newest' => Product::newest(),
        ]);
    }

    public function showCategoryProducts(Request $request)
    {
        return view('list-products', [
            'categories' => Category::all(), 
            'category' => Category::find($request->id),
            'products' => Product::where('category_id', $request->id)->get(),
        ]);
    }

    public function showAllProducts(Request $request)
    {
        return view('list-products', [
            'categories' => Category::all(), 
            'category' => null,
            'products' => Product::all(),
        ]);
    }

    public function showProduct($id)
    {
        return view('show-product', [
            'categories' => Category::all(),
            'product' => Product::find($id),
            'mightAlsoLike' => Product::where('id', '!=', $id)->mightAlsoLike()->get(),
        ]);
    }
    
}
