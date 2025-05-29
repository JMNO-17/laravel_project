<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Laptop',
                'description' => 'Latest model laptop',
                'price' => 1000,
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Latest model smartphone',
                'price' => 800,
            ],
            [
                'name' => 'Headphones',
                'description' => 'Latest model headphones',
                'price' => 200,
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'Latest model smartwatch',
                'price' => 400,
            ],
            [
                'name' => 'Tablet',
                'description' => 'Latest model tablet',
                'price' => 600,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        
    }
}
