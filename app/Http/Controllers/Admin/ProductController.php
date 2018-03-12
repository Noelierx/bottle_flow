<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::paginate(15),
        ]);
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        return redirect()->back();
    }

    public function edit()
    {
        return view('admin.product.edit');
    }

    public function update(Request $request, Product $product)
    {
        return redirect()->back();
    }

    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     * @throws Exception
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
        } catch (Exception $e) {
            abort(500);
        }

        return redirect()->back();
    }
}
