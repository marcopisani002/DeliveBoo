<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ["italiano", "cinese", "giapponese", "messicano", "indiano", "fast-food"];

        foreach ($types as $Type) {
            DB::table('types')->insert([
                'name' => $Type,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
