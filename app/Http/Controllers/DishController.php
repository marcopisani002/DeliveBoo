<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use Illuminate\Support\Facades\Storage;


class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //RIGA 22-24 FUNZIONALE ALLA SINCRONIZZAZIONE DELLE
        // FOREIGN KEY CON LE RELATIVE TABELLE. BRB LATER 
        $dishes = Dish::all();
        $users = User::all();
        $user_id = auth()->user()->id;
        $dishes = Dish::where('restaurant_id', $user_id)->get();

        return view('dishes.index', [
            'dishes' => $dishes,
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
        $data = $request->validated();

        $path = Storage::put("dish", $data["cover_img"]);
        

        $dish->fill($data);
        $dish->cover_img = $path;
        $dish->save();

        return redirect()->route("dishes.show", compact('dishes'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dishes = Dish::findOrFail($id);

        return view('dishes.show', compact('dishes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dishes = Dish::find($id);


        return view('dishes.create', [
            'dishes' => $dishes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDishRequest $request, Dish $dishes)
    {

        return redirect()->route("dishes.show", $dishes->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dishes = Dish::findOrFail($id);

        if ($dishes->cover_img) {
            Storage::delete($dishes->cover_img);
        }

        $dishes->delete();

        return redirect()->route("dishes.index", $dishes->id);
    }
}
