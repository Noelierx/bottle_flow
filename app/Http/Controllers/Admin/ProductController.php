<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Product;
use App\ProductType;
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
        return view('admin.product.create', [
            'types' => ProductType::orderBy('id')->pluck('type', 'id'),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'reference' => 'required|unique:products|max:255',
            'title' => 'required|string|unique:products|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'tax_rate' => 'required|numeric|min:0',
            'type' => 'required|exists:product_types,id',
            'picture' => 'required|image'
        ]);

        $product = new Product($request->all());
        $product->picture = $request->file('picture')->storePublicly('products', 'public');
        $product->type()->associate(ProductType::findOrFail($request->get('type')));
        $product->save();

        return redirect()->route('admin.products.index');
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
