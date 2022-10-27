<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Deal Name 01',
            'price' => 250,
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.',
            'image' => '/assets/images/deals-img.png'
        ]);

        Product::create([
            'name' => 'Deal Name 02',
            'price' => 350,
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.',
            'image' => '/assets/images/deals-img.png'
        ]);
        Product::create([
            'name' => 'Deal Name 03',
            'price' => 450,
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.',
            'image' => '/assets/images/deals-img.png'
        ]);
   

        Product::create([
            'name' => 'Deal Name 04',
            'price' => 550,
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.',
            'image' => '/assets/images/deals-img.png'
        ]);
   

        Product::create([
            'name' => 'Deal Name 02',
            'price' => 650,
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.',
            'image' => '/assets/images/deals-img.png'
        ]);
   

        Product::create([
            'name' => 'Deal Name 05',
            'price' => 750,
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.',
            'image' => '/assets/images/deals-img.png'
        ]);
   

        Product::create([
            'name' => 'Deal Name 06',
            'price' => 950,
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.',
            'image' => '/assets/images/deals-img.png'
        ]);
   

        Product::create([
            'name' => 'Deal Name 07',
            'price' => 850,
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.',
            'image' => '/assets/images/deals-img.png'
        ]);
   
        Product::create([
            'name' => 'Deal Name 08',
            'price' => 1050,
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.',
            'image' => '/assets/images/deals-img.png'
        ]);

        Product::create([
            'name' => 'Deal Name 09',
            'price' => 1250,
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.',
            'image' => '/assets/images/deals-img.png'
        ]);

        Product::create([
            'name' => 'Deal Name 10',
            'price' => 1350,
            'description' => 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.',
            'image' => '/assets/images/deals-img.png'
        ]);
   
    }
}
