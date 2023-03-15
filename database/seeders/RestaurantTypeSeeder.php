<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantTypeSeeder extends Seeder
{
    public function run()
    {
        
        $bridges =     
        [
            [
                "restaurant_id" => "1",
                "type_id" => "3",
            ],
            [
                "restaurant_id" => "1",
                "type_id" => "4",
            ],
            [
                "restaurant_id" => "1",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "2",
                "type_id" => "1",
            ],
            [
                "restaurant_id" => "2",
                "type_id" => "2",
            ],
            [
                "restaurant_id" => "2",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "3",
                "type_id" => "1",
            ],
            [
                "restaurant_id" => "3",
                "type_id" => "2",
            ],
            [
                "restaurant_id" => "4",
                "type_id" => "3",
            ],
            [
                "restaurant_id" => "4",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "5",
                "type_id" => "4",
            ],
            [
                "restaurant_id" => "5",
                "type_id" => "5",
            ],
            [
                "restaurant_id" => "5",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "6",
                "type_id" => "3",
            ],
            [
                "restaurant_id" => "7",
                "type_id" => "4",
            ],
            [
                "restaurant_id" => "7",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "8",
                "type_id" => "4",
            ],
            [
                "restaurant_id" => "9",
                "type_id" => "5",
            ],
            [
                "restaurant_id" => "9",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "10",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "11",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "12",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "13",
                "type_id" => "4",
            ],
            [
                "restaurant_id" => "13",
                "type_id" => "5",
            ],
            [
                "restaurant_id" => "14",
                "type_id" => "3",
            ],
            [
                "restaurant_id" => "14",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "15",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "16",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "17",
                "type_id" => "3",
            ],
            [
                "restaurant_id" => "17",
                "type_id" => "6",
            ],
            [
                "restaurant_id" => "18",
                "type_id" => "1",
            ],
            [
                "restaurant_id" => "18",
                "type_id" => "2",
            ],
            [
                "restaurant_id" => "19",
                "type_id" => "4",
            ],
            [
                "restaurant_id" => "19",
                "type_id" => "5",
            ],
            [
                "restaurant_id" => "20",
                "type_id" => "1",
            ],
            [
                "restaurant_id" => "20",
                "type_id" => "2",
            ],
        ];

        foreach ($bridges as $bridge) {
                DB::table('restaurant_type')->insert([
                    'restaurant_id' => $bridge['restaurant_id'],
                    'type_id' => $bridge['type_id']
                ]);
            }
        }
}