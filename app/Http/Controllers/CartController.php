<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'quantities' => 'required|array'
        ]);

        foreach ($request->quantities as $row => $quantity) {
            if (Cart::content()->has($row)) {
                if ($quantity > 0) {
                    Cart::get($row)->setQuantity($quantity);
                } else {
                    Cart::remove($row);
                }
            }
        }

        return redirect()->back();
    }

    public function destroy()
    {
        Cart::destroy();

        return redirect()->back();
    }
}
