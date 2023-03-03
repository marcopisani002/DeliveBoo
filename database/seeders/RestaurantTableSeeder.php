<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $types = Type::all();

        for ($i = 0; $i < 20; $i++) {
            $restaurant = Restaurant::create([
                "name" => $faker->realText(),
                "phone_number" => rand(11111111, 91111111),
                "cover_img" => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-photos-vectors%2Ffake&psig=AOvVaw1R6I2ndtPZoAGipwf114Ir&ust=1677859908776000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCKDz27DRvf0CFQAAAAAdAAAAABAD",
                "vat" => rand(11111111, 91111111),
                "address" => $faker->realText(),
                "user_id" => '1',
            ]);

            $restaurant->types()->attach($types->random(rand(1, $types->count()))->pluck("id"));
        }
    }
}
