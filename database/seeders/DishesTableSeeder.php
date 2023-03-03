<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $restaurants = Restaurant::all();
        

        for ($i = 0; $i < 50; $i++) {
            $dish = Dish::create([
                "name" => $faker->realText(),
                "cover_img" => "",
                "ingredients" => $faker->realText(),
                "description" => $faker->sentence(),
                "price" => rand(5, 50),
                //"restaurant_id" => $restaurants->random(1, 5)->id,
                "hide" => true,
            ]);

            
        };
    }
}