<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Generator as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $order = new Order;
            $order->customer_name = $faker->firstName();
            $order->customer_surname = $faker->lastName();
            $order->customer_address = $faker->address();
            $order->customer_phone = '33' . rand(1000001, 9999999);
            $order->total_amount = $faker->randomFloat(2, 1, 70);
            $order->save();

        }
    }
}