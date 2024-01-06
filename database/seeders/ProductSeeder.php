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
        Product::insert([
            [
                'name' => 'Pancake',
                'price' => 500,
                'description' => 'Tasty pancake',
                'is_active' => true,
                'category_id' => 1
            ],
            [
                'name' => 'Milkshake',
                'price' => 100,
                'description' => 'The one and only',
                'is_active' => true,
                'category_id' => 2
            ],
            [
                'name' => 'Tofu',
                'price' => 200,
                'description' => 'Crunchy and tasty',
                'is_active' => false,
                'category_id' => 3
            ],
            [
                'name' => 'Apple',
                'price' => 600,
                'description' => 'Imported from the freshness of the middle of the ocean',
                'is_active' => false,
                'category_id' => 4
            ],
            [
                'name' => 'Wasabi',
                'price' => 1000,
                'description' => 'It is recommended to consume it directly',
                'is_active' => false,
                'category_id' => 5
            ],
        ]);
    }
}
