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
        $restaurants = Restaurant::all();
        $types = Type::all();
        $users = User::all();
        $dishes = Dish::all();
    
        return view("restaurants.index", compact('users', 'dishes','restaurants','types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurants = Restaurant::all();
        $types = Type::all();

        return view ('restaurants.create', [
            'restaurants'=> $restaurants,
            'types'=>$types,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        $data = $request->validated();
        $restaurant = Restaurant::create([
            ...$data,
            "cover_img" => $path ?? '',
             // recuperiamo l'id dagli user cioé user_id é uguale all'utente loggato
            "user_id" => Auth::id(),
        ]);

        $types = Type::all();
        $path = Storage::put("restaurant", $data["cover_img"]);

        $restaurant->fill($data);
        $restaurant->save();
        
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
    public function edit($id)
    {
        $restaurant = restaurant::findOrFail($id);
        $types = Type::all();

        return view('restaurants.edit',compact('restaurant','types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, $id)
    {
        $data = $request->validated();
        $restaurant = restaurant::findOrFail($id);
        $types = Type::all();

        
        if (key_exists("cover_img", $data)){   
            $path = Storage::put("restaurants", $data["cover_img"]);
            Storage::delete($restaurant->cover_img);
        }

        $restaurant->update([
            ...$data,
            "cover_img"=>$path ?? $restaurant->cover_img
        ]);
        $restaurant->types()->sync($data["types"]);

        return redirect()->route('restaurants.show',compact('restaurant','types'));
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant, $id)
    {
        $restaurant = Restaurant::findOrFail($id);

        if ($restaurant->cover_img) {
            Storage::delete($restaurant->cover_img);
        }

        $restaurant->types()->detach();
        $restaurant->delete();

        return redirect()->route("restaurants.index", $restaurant->id);
    }
}
