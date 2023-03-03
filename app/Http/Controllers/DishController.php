<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::all();

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



        return redirect()->route("dishes.show", compact('dish'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dish = Dish::findOrFail($id);

        return view('dishes.show', compact('dish'));
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
    public function update(UpdateDishRequest $request, Dish $dish)
    {

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
