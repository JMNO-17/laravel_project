<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; 

class CategoryController extends Controller
{
    public function index()
    {
        
        $categories = Category::all();

        return view('categories.index', compact('categories'));

    }

    public function show($id)
    {

        // dd('here');
        // dd($id);
        $category = Category::find($id);
        // dd($category);
        return view('categories.show', compact('category'));
    }

    public function edit($id)
    {
    //    dd('here');
    //    dd($id);
       $category = Category::find($id);
    //    dd($category);
       return view('categories.edit', compact('category'));
    }

    public function update(Request $request){
    //    dd(here);
       $category = Category::find($request->id);

       $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index');
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    public function delete($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('categories.index');
    }
}
