<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $restaurants = Restaurant::all();

        for ($i = 0; $i < 15; $i++) {
            $dish = Dish::create([
                "name" => $faker->realText(),
                "cover_img" => "/dish/73rGU7hiLUjifUhDhAfAt1DRsXX3GPyN6gvoh8Om.jpg",
                "ingredients" => $faker->realText(),
                "description" => $faker->sentence(),
                "price" => rand(5, 50),
                "hide" => true,
                "restaurant_id" => 1,
            ]);  
                // $dish = new Dish;
                // $dish->name = $faker->realText();
                // $dish->cover_img = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-photos-vectors%2Ffake&psig=AOvVaw1R6I2ndtPZoAGipwf114Ir&ust=1677859908776000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCKDz27DRvf0CFQAAAAAdAAAAABAD";
                // $dish->ingredients = $faker->realText();
                // $dish->description = $faker->sentence();
                // $dish->price = rand(5, 50);
                // $dish->hide = true;
                // $dish->restaurant_id = rand(1, $restaurants->count());
                // $dish->save();
            
            //  $dish->restaurants()->attach($restaurants->random(rand(1, $restaurants->count()))->pluck("id"));

        };
    }
}