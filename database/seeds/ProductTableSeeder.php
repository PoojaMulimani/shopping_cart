<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => '/image/teddy1.jpg',
        	'title' => 'Teddy Bear',
        	'description' => 'super cool _ laravel project',
        	'price' => 10
        ]);
        $product->save();

         $product = new \App\Product([
        	'imagePath' => '/image/Teddy2.jpeg',
        	'title' => 'Teddy Bear',
        	'description' => 'super cool _ laravel project',
        	'price' => 10
        ]);
        $product->save();

         $product = new \App\Product([
        	'imagePath' => '/image/teddy3.jpg',
        	'title' => 'Teddy Bear',
        	'description' => 'super cool _ laravel project',
        	'price' => 10
        ]);
        $product->save();

         $product = new \App\Product([
        	'imagePath' => '/image/teddy3.jpg',
        	'title' => 'Teddy Bear',
        	'description' => 'super cool _ laravel project',
        	'price' => 10
        ]);
        $product->save();

         $product = new \App\Product([
        	'imagePath' => '/image/teddy1.jpg',
        	'title' => 'Teddy Bear',
        	'description' => 'super cool _ laravel project',
        	'price' => 10
        ]);
        $product->save();
    }
}
