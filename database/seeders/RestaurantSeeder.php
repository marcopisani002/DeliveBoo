<?php

namespace Database\Seeders;

use App\Functions\Helpers;
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
        $restaurants = [
        
                [
                    "id" => 1,
                    "name" => "Gusto Italiano",
                    "address" => "Via del Corso, 15, 00186 Roma",
                    "vat" => "92255625968",
                    "phone_number" => "3774362879",
                    "cover_img" => "restaurant/gustoitaliano.jpg",
                    "user_id" => 1,
                ],
        
                [
                    "id" => 2,
                    "name" => "Il gusto della nebbia",
                    "address" => "Via rociata, 22, 00186 Roma",
                    "vat" => "76723625922",
                    "phone_number" => "3774552773",
                    "cover_img" => "restaurant/gustodellanebbia.jpeg",
                    "user_id" => 2,
                ],
        
                [
                    "id" => 3,
                    "name" => "Sushi Wok",
                    "address" => "Via Giuseppe Mazzini, 47, 00195 Roma",
                    "vat" => "31978647182",
                    "phone_number" => "0644243678",
                    "cover_img" => "restaurant/wok.jpg",
                    "user_id" => 3,
                ],
                [
                    "id" => 4,
                    "name" => "La Trattoria",
                    "address" => "Via di San Giovanni, 24, 00184 Roma",
                    "vat" => "14786253982",
                    "phone_number" => "0687135784",
                    "cover_img" => "restaurant/latrattoria.png",
                    "user_id" => 4,
                ],
                [
                    "id" => 5,
                    "name" => "El Mericanos",
                    "address" => "Via delle Muratte, 35, 00187 Roma",
                    "vat" => "26719385672",
                    "phone_number" => "0687192385",
                    "cover_img" => "restaurant/elmericanos.jpg",
                    "user_id" => 5,
                ],
        
             
                [
                    "id" => 6,
                    "name" => "Pizzeria del Corso",
                    "address" => "Via del Corso, 26, 00186 Roma",
                    "vat" => "12345678901",
                    "phone_number" => "3061234567",
                    "cover_img" => "restaurant/pizzeriadelcorso.jpg",
                    "user_id" => 6,
                ],
        
                [
                    "id" => 7,
                    "name" => "Ristorante Trastevere",
                    "address" => "Via della Scala, 53, 00153 Roma",
                    "vat" => "23456789012",
                    "phone_number" => "3452345678",
                    "cover_img" => "restaurant/ristorantetrastevere.jpg",
                    "user_id" => 7,
                ],    
              
                [
                    "id" => 8,
                    "name" => "Osteria alla frasca",
                    "address" => "Piazza del Popolo, 4, 00187 Roma",
                    "vat" => "34567890123",
                    "phone_number" => "6783456789",
                    "cover_img" => "restaurant/osteriafrasca.jpg",
                    "user_id" => 8,
                ],
                
                [
                    "id" => 9,
                    "name" => "Il Passetto",
                    "address" => "Via dei Pellegrini, 68, 00186 Roma",
                    "vat" => "45678901234",
                    "phone_number" => "9064567890",
                    "cover_img" => "restaurant/ilpassetto.jpg",
                    "user_id" => 9,
                ],    
                
                [
                    "id" => 10,
                    "name" => "Ristorante La Pergola",
                    "address" => "Via Alberto Cadlolo, 101, 00136 Roma",
                    "vat" => "56789012345",
                    "phone_number" => "6455678901",
                    "cover_img" => "restaurant/lapergola.jpg",
                    "user_id" => 10,
                ],
        
                [
                    "id" => 11,
                    "name" => "Taverna Trilussa",
                    "address" => "Via del Politeama, 23, 00153 Roma",
                    "vat" => "67890123456",
                    "phone_number" => "9576789012",
                    "cover_img" => "restaurant/tavernatrilussa.jpg",
                    "user_id" => 11,
                ],
        
                [
                    "id" => 12,
                    "name" => "Roscioli",
                    "address" => "Via dei Giubbonari, 21, 00186 Roma",
                    "vat" => "76543210987",
                    "phone_number" => "0648902005",
                    "cover_img" => "restaurant/fornoroscioli.jpg",
                    "user_id" => 12,
                ],
                    
                [
                    "id" => 13,
                    "name" => "kebabba halid",
                    "address" => "Via Alberto Cadlolo, 101, 00136 Roma",
                    "vat" => "54321098765",
                    "phone_number" => "6063509383",
                    "cover_img" => "restaurant/kebabhalid.jpg",
                    "user_id" => 13,
                ],
                    
                [
                    "id" => 14,
                    "name" => "Eataly",
                    "address" => "Piazzale 12 Ottobre 1492, 00154 Roma",
                    "vat" => "87654321098",
                    "phone_number" => "7706583771",
                    "cover_img" => "restaurant/eataly.jpg",
                    "user_id" => 14,
                ],
        
                [
                    "id" => 15,
                    "name" => "Ristorante Alfredo alla Scrofa",
                    "address" => "Via della Scrofa, 104, 00186 Roma",
                    "vat" => "09876543210",
                    "phone_number" => "0668803034",
                    "cover_img" => "restaurant/alfredoallascrofa.jpg",
                    "user_id" => 15,
                ],
                    
                [
                    "id" => 16,
                    "name" => "Hostaria Antica Roma",
                    "address" => "Via Ferruccio, 12, 00185 Roma",
                    "vat" => "34567890123",
                    "phone_number" => "064469178",
                    "cover_img" => "restaurant/hostariaanticaroma.jpg",
                    "user_id" => 16,
                ],
                    
                [
                    "id" => 17,
                    "name" => "Rosetta",
                    "address" => "Via della Rosetta, 8, 00186 Roma",
                    "vat" => "67890123456",
                    "phone_number" => "066864068",
                    "cover_img" => "restaurant/rosetta.jpg",
                    "user_id" => 17,
                ],
        
                [
                    "id" => 18,
                    "name" => "thao mato",
                    "address" => "Via dei Gracchi, 55, 00192 Roma",
                    "vat" => "12345678901",
                    "phone_number" => "065817686",
                    "cover_img" => "restaurant/thaomato.jpg",
                    "user_id" => 18,
                ],
                    
                [
                    "id" => 19,
                    "name" => "bristo ararat",
                    "address" => "Via Alberto Cadlolo, 101, 00136 Roma",
                    "vat" => "34567890123",
                    "phone_number" => "06688110",
                    "cover_img" => "restaurant/bistrotararat.jpg",
                    "user_id" => 19,
                ],
                    
                [
                    "id" => 20,
                    "name" => "taste aest",
                    "address" => "Via di San Marco, 31, 00186 Roma",
                    "vat" => "56789012345",
                    "phone_number" => "066880030",
                    "cover_img" => "restaurant/tasteaest.jpg",
                    "user_id" => 20,
                ],
        ];

        foreach ($restaurants as $key => $restaurant) {
            $newrestaurant = new Restaurant();
            $newrestaurant->name = $restaurant['name'];
            $newrestaurant->slug = Helpers::generateSlug($newrestaurant->name);
            $newrestaurant->address = $restaurant['address'];
            $newrestaurant->vat = $restaurant['vat'];
            $newrestaurant->phone_number = $restaurant['phone_number'];
            $newrestaurant->cover_img = $restaurant['cover_img'];
            $newrestaurant->user_id = $key + 1;

            $newrestaurant->save();

            // $newrestaurant->types()->sync($restaurant['type_id']);
        }
    }
}