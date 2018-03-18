<?php

namespace App\Http\Controllers;

use Auth;
use Cart;
use App\User;
use App\Order;
use App\Product;
use App\Rules\Future;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index', [
            'orders' => Auth::user()->orders,
        ]);
    }

    public function show(Order $order)
    {
        return view('order.show', [
            'order' => $order,
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $order = $this->createOrder($request, $user);

        Cart::destroy();

        $this->fillUserInventory($user, $order);

        return view('order.success', [
            'order' => $order
        ]);
    }

    private function createOrder(Request $request, User $user)
    {
        $order = new Order();
        $order->reference = str_random(8);
        $order->user()->associate($user);
        $order->save();

        foreach (Cart::content() as $row) {
            $order->products()->attach([
                $row->model->id => [
                    'quantity' => $row->qty
                ]
            ]);
        }

        $order->save();

        return $order;
    }

    private function fillUserInventory(User $user, Order $order)
    {
        foreach ($order->products as $product) {
            if (!$user->products->contains($product)) {
                $user->products()->attach([
                    $product->id => [
                        'quantity' => $product->pivot->quantity
                    ]
                ]);
            } else {
                $userProduct = $user->products->filter(function ($item) use ($product) {
                    return $item->id == $product->id;
                })->first();

                $user->products()->updateExistingPivot($product->id, [
                    'quantity' => $userProduct->pivot->quantity + $product->pivot->quantity
                ]);
            }
        }

        $user->save();
    }
}
