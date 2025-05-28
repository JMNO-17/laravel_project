<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; 

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = [
        //     [
        //         'id' => 1,
        //         'name' => 'Information Technology',
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Travel',
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Food',
        //     ],
        //     [
        //         'id' => 4,
        //         'name' => 'Health & Fitness',
        //     ],
        //     [
        //         'id' => 5,
        //         'name' => 'Education',
        //     ],
        // ];
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
}
