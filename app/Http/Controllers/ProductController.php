<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\EditUpdateRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view("products.show", compact('product'));

    }


    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $product = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'image' => 'required',
            'category_id' => 'required',

        ]);

        if($request->hasFIle("image")){

        //    dd($request->image);
        // $productImages = $request->image->filename . ".jpg";
        $productImages  = time() . '.jpg';
        $request->image->move(public_path('productImages'),$productImages);

        $product = array_merge($product,['image'=>$productImages]);
        // $product['image'] = $productImages;

        }

        Product::create($product);

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
       $product = Product::find($id);
       $categories = Category::all();

       return view('products.edit', compact('product', 'categories'));

    }


    public function update(EditUpdateRequest $request){

       $product = Product::find($request->id);

       $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
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
