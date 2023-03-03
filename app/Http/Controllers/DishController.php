<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;

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
    public function store(StoreDishRequest $request, Dish $dishes)
    {
        $data = $request->validated();

        // $path = Storage::put("dishes", $data["cover_img"]);

        $dishes->fill($data);
        // $dishes->cover_img = $path;
        $dishes->save();

        if($request->status == 'on'){
            
        }

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

        // if ($dishes->cover_img) {
        //     Storage::delete($dishes->cover_img);
        // }

        $dishes->delete();

        return redirect()->route("dishes.index", $dishes->id);
    }
}
