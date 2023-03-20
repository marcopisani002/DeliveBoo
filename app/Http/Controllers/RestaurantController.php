<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Type;
use App\Models\Dish;
use App\Models\User;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $restaurants = Restaurant::all();
        $types = Type::all();
        $user = Auth::user();
        $dishes = Dish::all();
        $restaurants = Restaurant::where('user_id', $user->id)->get();
        
        return view ('restaurants.index', compact('restaurants','user', 'dishes','types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurants = Restaurant::all();
        $types = Type::all();
        $user = Auth::user();
        $dishes = Dish::all();
        

        return view ('restaurants.create', compact('user', 'dishes','restaurants','types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        $types = Type::all();
        $user = Auth::user();
        $data = $request->validated();
        // $data["slug"] = Restaurant::getSlug($request->name);
        // $restaurant = new Restaurant;
        // $restaurant->fill($data);
        $path = Storage::put("restaurant", $data["cover_img"]);
        // $restaurant->cover_img = $path;
        $data['restaurant_id'] = $user->id;
        $data['slug'] = Restaurant::getSlug($request->name);
        
        $restaurant = Restaurant::create([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'phone_number' => $data['phone_number'],
            'cover_img' => $path,
            'vat' => $data['vat'],
            'address' => $data['address'],
            'user_id' => $data['restaurant_id']
        ]);
        if (key_exists('types', $data)){
            $restaurant->types()->attach($data["types"]);
        }
        
        return redirect()->route('restaurants.show', compact('restaurant','types'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        
        $types = Type::all();
        return view ('restaurants.show', compact('restaurant','types'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
