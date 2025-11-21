<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Advantage;

class AdvantagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $advantages = [
            [
                'title' => 'Quality Ingredients',
                'description' => 'Using bread and fillings with the best selected 
                ingredients to ensure satisfying taste and texture.'
            ],
            [
                'title' => 'Varying Tastes', 
                'description' => 'The wide selection of flavors allows customers to 
                try various combinations to suit their tastes.'
            ],
            [
                'title' => 'Practical Packaging',
                'description' => 'Designed to make it easy for customers to carry 
                and consume sandwiches anywhere.'
            ],
            [
                'title' => 'Affordable Prices',
                'description' => 'Offering quality products at affordable prices.'
            ]
        ];

        foreach ($advantages as $advantage) {
            Advantage::create($advantage);
        }
    }
}
