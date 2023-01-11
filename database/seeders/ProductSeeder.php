<?php

namespace Database\Seeders;

use App\Models\Discount;
use App\Models\Product;
use App\Status\ProductStatus;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discount = Discount::all()->random();
        $products = Product::factory(25)->create();

        $images = array(
            public_path('images/products/cake-1.jpg'),
            public_path('images/products/cake-2.jpg'),
            public_path('images/products/cake-3.jpg'),
            public_path('images/products/cake-4.jpg'),
            public_path('images/products/cake-5.jpg'),
            public_path('images/products/cake-6.jpg'),
            public_path('images/products/cake-7.jpg'),
            public_path('images/products/cake-8.jpg'),
            public_path('images/products/cake-9.jpg'),
        );

        foreach ($products as $product){
            if($product->status == ProductStatus::discounted){
               $discount->products()->attach($product->id);
            }
            $product->copyMedia( $images[array_rand($images)] )
                ->toMediaCollection('products');
        }
    }
}
