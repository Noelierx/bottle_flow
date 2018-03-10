<?php

namespace App\Http\Controllers;

use Auth;
use Cart;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index', [
            'products' => Product::paginate(15)
        ]);
    }

    public function show(Product $product)
    {
        return view('product.show', [
            'user' => Auth::user(),
            'cart' => Cart::instance(Cart::currentInstance()),
            'product' => $product,
        ]);
    }
}
