<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\User;
use App\Models\Restaurant;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        //RIGA 22-24 FUNZIONALE ALLA SINCRONIZZAZIONE DELLE
        // FOREIGN KEY CON LE RELATIVE TABELLE. BRB LATER 
        $dishes = Dish::where('restaurant_id', $user->id)->get();
        
      
        $userRestaurant = Dish::where('restaurant_id', $user->id)->get();

        return view('dishes.index', [
            'dishes' => $dishes,
            'userRestaurant' => $userRestaurant,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dishes = Dish::all();

        return view('dishes.create', [
            'dishes' => $dishes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDishRequest $request, Dish $dish)
    {
        // $user = Auth::user();
         $data = $request->validated();

         $path = Storage::put("dish", $data["cover_img"]);
        
         $dish->fill($data);
        
        $user = Auth::user();
        $dish = new Dish;
        $dish->cover_img = $path;
        $dish->name = $request->name;
        $dish->description = $request->description;
        $dish->ingredients = $request->ingredients;
        $dish->price = $request->price;
        $dish->restaurant_id = $user->id;
        $dish->save();
    
       return redirect()->route("dishes.show", compact('dish'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dish = Dish::findOrFail($id);
        $restaurant_id = Auth::user()->restaurant->id;

        if ($restaurant_id !== $dish->restaurant_id) {
            abort(403);
        }
        return view('dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dish = Dish::findOrFail($id);
        $restaurant_id = Auth::user()->restaurant->id;

        if ($restaurant_id !== $dish->restaurant_id) {
            abort(403);
        }
        
        return view('dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDishRequest $request, Dish $dish)
    {
        $data = $request->validated();
        $dish->update($data);

        $path = Storage::put("dish", $data["cover_img"]);
        
        $dish->cover_img = $path;
        $dish->save();

        return redirect()->route("dishes.show", $dish->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dish = Dish::findOrFail($id);

        if ($dish->cover_img) {
            Storage::delete($dish->cover_img);
        }

        $dish->delete();

        return redirect()->route("dishes.index", $dish->id);
    }
}
