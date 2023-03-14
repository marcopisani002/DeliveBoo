<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types =     
        [
            [
                "name" => "Cinese",
            ],
    
            [
                "name" => "Giapponese",
            ],
    
            [
                "name" => "Pizzeria",
            ],
    
            [
                "name" => "Americano",
            ],
    
            [
                "name" => "Kebab",
            ],
    
            [
                "name" => "Bisteccheria",
            ],
        ];

        foreach($types as $type){

            $newtype = new Type();
            $newtype->name = $type['name'];
            // $newtype->slug = Helpers::generateSlug($newtype->name);
            $newtype->save();
        }
    }
}