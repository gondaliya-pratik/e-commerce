<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = ['Electronics', 'Clothing', 'Footware', 'Helth & bueaty', 'Sport Equipment', 'watches'];

        foreach ($category as $item) {
            Category::create(['name' => $item]);
        }
    }
}
