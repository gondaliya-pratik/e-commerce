<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductTag;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'product_id' => 1,
                'name' => 'electronics',
            ],
            [
                'product_id' => 1,
                'name' => 'tv',
            ],
            [
                'product_id' => 1,
                'name' => 'midv',
            ],
            [
                'product_id' => 2,
                'name' => 'clothes',
            ],    
            [
                'product_id' => 2,
                'name' => 'mens',
            ],
            [
                'product_id' => 3,
                'name' => 'kids',
            ],
            [
                'product_id' => 2,
                'name' => 'nightdress',
            ],       
        ];

        ProductTag::insert($product);
    }
}
