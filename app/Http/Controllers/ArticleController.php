<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function data ()
    {
        // $user_data = [
        //     [
        //         'id' => 1,
        //         'name' => 'John',
        //         'email'=> 'john@gmail.com'
        //     ],
        //     [
        //         'id' => 2,
        //        'name' => 'thiri',
        //        'email'=> 'thiri@gmail.com'
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Hein',
        //         'email'=> 'hein@gmail.com'
        //     ],
        //     [
        //         'id' => 4,
        //         'name' => 'Paing',
        //         'email'=> 'paing@gmail.com'
        //     ],
        //     [
        //         'id' => 5,
        //         'name' => 'Moe',
        //         'email'=> 'moe@gmail.com'
        //     ],
        // ];

        $user_data = Article::all();

        return view('categories.article', compact('user_data'));
    }
}
