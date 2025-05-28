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
        $product_data = [
            [
                'name' => 'Laptop',
                'description' => 'Latest model laptop',
                'price' => 1000.00,
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Latest model smartphone',
                'price' => 800.00,
            ],
            [
                'name' => 'Headphones',
                'description' => 'Latest model headphones',
                'price' => 200.00,
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'Latest model smartwatch',
                'price' => 400.00,
            ],
            [
                'name' => 'Tablet',
                'description' => 'Latest model tablet',
                'price' => 600.00,
            ],
        ];

        foreach ($product_data as $data) {
            Product::create($data);
        }

        
    }
}
