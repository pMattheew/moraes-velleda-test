<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_name' => 'appetizers',
                'description' => 'Delicious and healthy appetizers to start your meal'
            ],
            [
                'category_name' => 'main',
                'description' => 'Tasty and satisfying main courses for any occasion'
            ],
            [
                'category_name' => 'desserts',
                'description' => 'Guilt-free desserts made with natural ingredients.'
            ]
        ];

        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
    }
}
