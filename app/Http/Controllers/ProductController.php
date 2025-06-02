<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\EditUpdateRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("products.index", compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view("products.show", compact('product'));
        
    }

    public function edit($id)
    {
       $product = Product::find($id);
   
       return view('products.edit', compact('product'));
    }


    public function update(EditUpdateRequest $request){
    
       $product = Product::find($request->id);

       $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('products.index');
    }



    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer'

        ]);
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('products.index');
    }


    public function delete($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->route('products.index');
    }
}
