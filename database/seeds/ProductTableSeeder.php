<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$products = [
    		[
    			'name' => "Iphone",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 21,
    			'price' => 200.10,
    			'image' => "https://enter.online/images/detailed/84/apple_iphone_11_green1a_nmx4-w8.png"
    		],
    		[
    			'name' => "OLG",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 400,
    			'price' => 1600.21,
    			'image' => "https://phonesdata.com/files/models/LG-Q9-927.jpg"
    		],
    		[
    			'name' => "Xiaomi",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 37,
    			'price' => 378.00,
    			'image' => "https://static.toiimg.com/photo/66591863/Xiaomi-Mi-9.jpg"
    		],
    		[
    			'name' => "Samsung",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 10,
    			'price' => 21.10,
    			'image' => "https://5.imimg.com/data5/NT/UC/WR/SELLER-82975943/samsung-galaxy-a7-a750-mobile-phone-500x500.jpg"
			],
			[
    			'name' => "Nokia",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 10,
    			'price' => 21.10,
    			'image' => "https://5.imimg.com/data5/NT/UC/WR/SELLER-82975943/samsung-galaxy-a7-a750-mobile-phone-500x500.jpg"
			],
    	];

    	foreach ($products as $product) {
    		Product::create($product);
    	}

    }
}
