<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('products.index');
    }

    public function read(Product $product)
    {
        $products = $product->all();

        return view('products.read', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request, Product $product)
    {
        $product->create([
            'product_name' => $request->product_name
        ]);
    }

    public function edit(Request $request, Product $product)
    {
        return view('products.edit', [
            'product' => $product->findOrFail($request->id)
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $data = $product->findOrFail($request->id);
        $data->update([
            'product_name' => $request->product_name
        ]);
    }

    public function destroy(Request $request, Product $product)
    {
        $data = $product->findOrFail($request->id);
        $data->delete();
    }
}
