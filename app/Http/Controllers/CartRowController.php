<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

class CartRowController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'product' => 'required|exists:products,id'
        ]);

        $product = Product::find($request->get('product'));

        Cart::add($product)->setTaxRate($product->taxRate);

        return redirect()->back();
    }

    public function destroy($row)
    {
        if (Cart::content()->has($row)) {
            Cart::remove($row);
        }

        return redirect()->back();
    }
}
