<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // Sweet
            [
                'name' => 'Butter Kaya Toast',
                'description' => 'Sandwich Description',
                'price' => 14000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Pandan Kaya Toast',
                'description' => 'Sandwich Description',
                'price' => 14000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Blueberry Cheesecake',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Strawberry Cheesecake',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Choco n Cheese',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Ovomaltine',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Ultimate Cheese',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Red Velvet',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Matcha Latte',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Tiramisu',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Milky Butter',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Milky Taro',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Musang King',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Peanut Butter',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Orange Marmalade',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'sweet',
                'image_path' => '/images/SandwichPanel.png'
            ],

            // savory
            [
                'name' => 'Tamago Sando',
                'description' => 'Sandwich Description',
                'price' => 14000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Spicy Egg Mayo',
                'description' => 'Sandwich Description',
                'price' => 14000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Kani Mayo',
                'description' => 'Sandwich Description',
                'price' => 14000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'RoTeJu',
                'description' => 'Sandwich Description',
                'price' => 14000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Singaporean',
                'description' => 'Sandwich Description',
                'price' => 14000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Egg Meets Mustard',
                'description' => 'Sandwich Description',
                'price' => 14000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'American Breakfast',
                'description' => 'Sandwich Description',
                'price' => 14000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'BigBoy',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'BigBoss',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'Chikatsudo',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'The Crown',
                'description' => 'Sandwich Description',
                'price' => 15000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
            [
                'name' => 'TunaMago Sando',
                'description' => 'Sandwich Description',
                'price' => 14000,
                'category' => 'savory',
                'image_path' => '/images/SandwichPanel.png'
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}