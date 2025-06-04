<?php

namespace App\Repositories\Product;
use App\Models\Product;
use App\Models\Category;

use App\Repositories\Product\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function index() {
         $categories = Product::all();
         return $categories;
    }

    public function store($product) {
        return Product::create($product);
    }

    public function create()
    {
        $categories = Category::all();
        return $categories;
    }

    public function edit($id) {
        $product = Product::find($id);
        return $product;
    }

    public function find($id) {
        return Product::find($id);
    }

}
