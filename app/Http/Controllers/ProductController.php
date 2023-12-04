<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
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
}
