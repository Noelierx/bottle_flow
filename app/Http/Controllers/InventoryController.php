<?php

namespace App\Http\Controllers;

use Auth;

class InventoryController extends Controller
{
    public function index()
    {
        return view('inventory.index', [
            'products' => Auth::user()->products
        ]);
    }
}
