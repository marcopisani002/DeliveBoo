<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Type;
use App\Models\Dish;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Dashboard;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        
        $types = Type::all();
        $user = Auth::user();
        $dishes = Dish::all();
        $restaurants = Restaurant::where('user_id', $user->id)->get();
        $restaurant_id = [Restaurant::pluck('id')];

        // if(key_exists('id', $restaurant_id)){
        //     return view('restaurants.show');
        // }else{
        //     return view('restaurants.create');
        // }

        return view('dashboard', [
            'restaurants' => $restaurants,
            'restaurant_id' => $restaurant_id,
            'types' => $types,
            'user' => $user,
            'dishes' => $dishes,
        ]);
        // ->with('restaurant', $restaurant);
    }
}
