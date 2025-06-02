<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; 
use App\Http\Requests\CategoryUpdateRequest;


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
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

    public function update(CategoryUpdateRequest $request)
    {
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
        $category = $request->validate([
            'name' => 'required|string'
        ]);
        Category::create($category);

        return redirect()->route('categories.index');
    }


    public function delete($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('categories.index');
    }
}
