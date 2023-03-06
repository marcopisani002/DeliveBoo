<?php

namespace App\Http\Controllers;
use App\Models\Type;
use App\Models\Dish;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Dashboard;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $restaurant = Restaurant::all();
        $restaurant_id = [Restaurant::pluck('id')];

        $types = Type::all();
        $users = User::all();
        $dishes = Dish::all();

        // if(key_exists('id', $restaurant_id)){
        //     return view('restaurants.show');
        // }else{
        //     return view('restaurants.create');
        // }

        return view('dashboard', [
            'restaurant' => $restaurant,
            'restaurant_id' => $restaurant_id,
            'types' => $types,
            'users' => $users,
            'dishes' => $dishes,
        ]);
    }
}
