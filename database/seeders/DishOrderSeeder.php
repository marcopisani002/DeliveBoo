<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishOrderSeeder extends Seeder
{
    public function run()
    {
        
        $dishorders =     
        [
            [
                "dish_id" => "50",
                "order_id" => "1",
            ],
            [
                "dish_id" => "60",
                "order_id" => "1",
            ],            
            [
                "dish_id" => "69",
                "order_id" => "1",
            ],            
            [
                "dish_id" => "50",
                "order_id" => "2",
            ],
            [
                "dish_id" => "76",
                "order_id" => "2",
            ],            
            [
                "dish_id" => "81",
                "order_id" => "2",
            ],            
            [
                "dish_id" => "15",
                "order_id" => "3",
            ],
            [
                "dish_id" => "10",
                "order_id" => "3",
            ],            
            [
                "dish_id" => "19",
                "order_id" => "3",
            ],         
            [
                "dish_id" => "5",
                "order_id" => "4",
            ],
            [
                "dish_id" => "23",
                "order_id" => "4",
            ],            
            [
                "dish_id" => "24",
                "order_id" => "4",
            ],         
            [
                "dish_id" => "20",
                "order_id" => "5",
            ],
            [
                "dish_id" => "37",
                "order_id" => "5",
            ],            
            [
                "dish_id" => "29",
                "order_id" => "5",
            ],
            [
                "dish_id" => "40",
                "order_id" => "5",
            ],

        ];

        foreach ($dishorders as $dishorder) {
                DB::table('dish_order')->insert([
                    'dish_id' => $dishorder['dish_id'],
                    'order_id' => $dishorder['order_id'],
                    'quantity' => rand(1, 3),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
}