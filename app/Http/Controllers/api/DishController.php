<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $dishes = Dish::where('restaurant_id', $id)->get();
        $restaurant = Restaurant::where('id', $id)->get();
        return response()->json([
            'dishes' => $dishes,
            'restaurant' => $restaurant
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255|string',
            'cover_img' => 'required|image',
            'ingredients' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'hide' => 'nullable|boolean',
        ]);

        if($request->has("cover_img")){
            $data["cover_img"] = Storage::put("/dishes", $data["cover_img"]);
        }

        $newDish = Dish::create($data);

        return response()->json($newDish);
        return redirect()->action('DishController@index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dish = Dish::find('id');

        return response()->json($dish->$id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|max:255|string',
            'cover_img' => 'required|image',
            'ingredients' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'hide' => 'nullable|boolean',
        ]);

        if($request->has("cover_img")){
            $data["cover_img"] = Storage::put("/dishes", $data["cover_img"]);
        }

        $newDish = Dish::create()->update($data);

        return response()->json($newDish);
        return redirect()->action('DishController@index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dish = Dish::findOrFail($id);

        if ($dish->cover_img) {
            Storage::delete($dish->cover_img);
        }

        $dish->delete();

        return response()->json($dish);
    }
}
