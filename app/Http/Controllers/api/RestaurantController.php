<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $restaurants = Restaurant::all();

        // $typeFilter = $request->input('type');
        // if ($typeFilter){
        //     $restaurants = Type::findOrFail($typeFilter)->restaurants()->with("types")->get();
        // }

	return response()->json($restaurants);
    }


    public function TypeSearch($type)
    {

        $restaurants = Restaurant::whereHas('types', function($query) use ($type) {
            $query->where('types.id', $type);
        })->get();
        $restaurants->load('types');

        return response()->json([
            "restaurants" => $restaurants,

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
            'name' => 'required|string|max:255',
            'phone_number' => 'required|digits:10',
            'cover_img' => 'required|image',
            'vat' => 'required|numeric|digits:11',
            'address' => 'required|string',
        ]);


        if($request->has("cover_img")){
            $data["cover_img"] = Storage::put("/restaurant", $data["cover_img"]);
        }

        $newRestaurant = Restaurant::create($data);

        return response()->json($newRestaurant);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $dishes = Dish::where('restaurant_id', $id)
        ->get();

        $restaurant = Restaurant::findOrFail($id);
        // $dishes = Dish::all();
        return response()->json([
            'restaurant' => $restaurant,
            'dishes' => $dishes
        ]);    
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
    public function update(Restaurant $restaurant, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
