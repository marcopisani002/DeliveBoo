<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;


class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = config('deliveboo_array.restaurants');

        // $users = User::all();

        foreach ($restaurants as $key => $restaurant) {
            $newrestaurant = new Restaurant();
            $newrestaurant->id = $restaurant['id'];
            $newrestaurant->name = $restaurant['name'];
            // $newrestaurant->slug = Helpers::generateSlug($newrestaurant->restaurant_name);
            $newrestaurant->address = $restaurant['address'];
            $newrestaurant->vat = $restaurant['vat'];
            $newrestaurant->phone_number = $restaurant['phone_number'];
            $newrestaurant->cover_img = $restaurant['cover_img'];
            $newrestaurant->user_id = $key + 1;

            $newrestaurant->save();

            $newrestaurant->types()->sync($restaurant['type_id']);


        }
    }
}