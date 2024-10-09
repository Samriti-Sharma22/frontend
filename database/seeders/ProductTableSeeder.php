<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create ([
            'name' => 'abc',
            'description' => 'sajkhsjhas',
            'price' => 200,

            
            'image_url' => 'product1.png'
        ]);
        Product::create ([
            'name' => 'abcd',
            'description' => 'sajkhsjhaqwqws',
            'price' => 200,
          
            'image_url' => 'product2.png'
        ]);
        Product::create ([
            'name' => 'abcwq',
            'description' => 'sajkhsqwwjhas',
            'price' => 100,
           
            'image_url' => 'product3.png'
        ]);
        Product::create ([
            'name' => 'abcqw',
            'description' => 'sajkhqwwqsjhas',
            'price' => 300,
          
            'image_url' => 'product4.png'
        ]);
       
    }
}
