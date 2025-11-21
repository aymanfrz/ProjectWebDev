<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageContent;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        PageContent::create([
            'title' => 'Our Products',
            'content' => 'KayaBoys is a to-go sandwich provider offering 27 flavor variants, 
            consisting of 15 sweet variants and 12 savory ones. Each sandwich is made 
            with high-quality toasted bread that is soft on the inside and crispy on 
            the outside, filled with a variety of delicious fillings. 
            The product is packaged conveniently and hygienically, 
            making it easy for customers to enjoy anywhere and anytime.'
        ]);
    }
}
