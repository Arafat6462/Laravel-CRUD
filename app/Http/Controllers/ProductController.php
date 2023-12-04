<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('products.index', ['products' => $product]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request);
        // dd($request->name);

        //validate data
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        //store data
        $NewProduct = Product::create($data);
        return redirect()->route('products.index');

    }

    public function edit(Product $product)
    {

        // dd($product);
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        // dd($request->all());
        // dd($request);
        // dd($request->name);

        //validate data
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        //store data
        $product->update($data);
        return redirect()->route('products.index')->with('success', 'Update Product Success');

    }

    public function destroy(Product $product)
    {
        // dd($product);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Delete Product Success');
    }
}
