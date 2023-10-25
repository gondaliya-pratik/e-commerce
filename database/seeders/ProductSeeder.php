<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'product_category_id' => 1,
                'name' => 'Mi Tv',
                'price' => 43000,
                'description' => 'Mi Tv xyz',
                'image' => 'upload/product/mitv.jpg',
            ],
            [
                'product_category_id' => 2,
                'name' => 'Man pants',
                'price' => 1700,
                'description' => 'cotten pants xyz',
                'image' => 'upload/product/mitv.jpg',
            ],
            [
                'product_category_id' => 2,
                'name' => 'kids nightdress',
                'price' => 1000,
                'description' => 'nightdrees',
                'image' => 'upload/product/mitv.jpg',
            ]
        ];

        Product::insert($product);
    }
}
