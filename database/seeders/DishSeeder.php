<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dish;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('deliveboo_array.dishes');


        foreach ($products as $product) {
            foreach ($product['restaurant_id'] as $restaurant) {
                $newproduct = new Dish();
                $newproduct->name = $product['name'];
                // $newproduct->slug = Dish::getSlug($newproduct->name, $restaurant);
                $newproduct->cover_img = $product['cover_img'];
                $newproduct->ingrediens = $product['ingrediens'];
                $newproduct->description = $product['description'];
                $newproduct->price = $product['price'];
                // $newproduct->available = $product['available'];
                // $newproduct->discount = $product['discount'];
                $newproduct->resturant_id = $product['resturant_id'];
                $newproduct->restaurant_id = $restaurant;

                $newproduct->save();
            }

            // $restaurants = $product['restaurant_id'];
            // $newproduct->restaurants()->sync($product['restaurant_id']);
        }

    }
}