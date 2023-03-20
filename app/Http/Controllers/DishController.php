<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\User;
use App\Models\Restaurant;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;
use App\Functions\Helpers;


class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $dishes = Dish::where('restaurant_id', $user->id)->get();
        
        // $userRestaurant = Restaurant::where('user_id', $user->id)->get();

        return view('dishes.index', [
            'dishes' => $dishes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDishRequest $request, Dish $dish)
    {
        $data = $request->validated();

        $restaurant_id = Auth::user()->restaurant->id;
        $data['restaurant_id'] = $restaurant_id;

        $slug = Dish::getSlug($request->name);

        $path = Storage::put("dish", $data["cover_img"]);
        // $dish->fill($data);
        $user = Auth::user();
        if (!isset($data["show"])) {
            $data['show']=0;
        }
        // $data["cover_img"] = $path;
        // $data["restaurant_id"] = $user->id;
        $data['restaurant_id'] = $restaurant_id;
        
        $dish = new Dish;
        $dish->cover_img = $path;
        $dish->name = $data['name'];
        $dish->slug =  Dish::getSlug($data['name'], $restaurant_id);
        $dish->description = $data['description'];
        $dish->ingredients = $data['ingredients'];
        $dish->price = $data['price'];
        $dish->show = $data['show'];
        $dish["restaurant_id"] = $user->id;
        $dish->save();
        return redirect()->route("dishes.show", compact('slug'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $user = Auth::user();
        $restaurant_id = Auth::user()->restaurant->id;
        $dish_array = Dish::where('restaurant_id', $user->id)
        ->where('slug', $slug)
        ->get();
        $dish = $dish_array[0];

        if ($restaurant_id !== $dish->restaurant_id) {
            abort(403);
        }
        
        return view('dishes.show',compact('dish')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $user = Auth::user();
        $restaurant_id = Auth::user()->restaurant->id;
        $dish_array = Dish::where('restaurant_id', $user->id)
        ->where('slug', $slug)
        ->get();
        $dish = $dish_array[0];
        if ($restaurant_id !== $dish->restaurant_id) {
            abort(403);
        }
        
        return view('dishes.edit',[
            'dish' => $dish,
            'slug' => $dish->slug
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDishRequest $request, $slug)
    {
        $data = $request->validated();
        $user = Auth::user();
        
        $slug = Dish::getSlug($request->name);
        $dish_array = Dish::where('restaurant_id', $user->id)
        ->where('slug', $slug)
        ->get();
        $dish = $dish_array[0];
        // dd($slug, $id);
        // $dish = Dish::firstOrFail($id);
        $restaurant_id = Auth::user()->restaurant->id;
        $data['restaurant_id'] = $restaurant_id;
        
        if (!isset($data["show"])) {
            $data['show']=0;
        } else {
            $data['show']=1;
        }
        
        if ($request->has('cover_img')) {
            // Salva il percorso della nuova immagine
            $newCoverImgPath = $request->file('cover_img')->store('dish');
            
            // Cancella l'immagine precedente (se presente)
            if ($dish->cover_img) {
                Storage::disk('public')->delete($dish->cover_img);
            }
            
            // Aggiorna il valore della chiave "cover_img" con il nuovo percorso
            $dish->update(['cover_img' => $newCoverImgPath]);
        }

        $dish->update(['name' => $request['name']]);
        $dish->update(['description' => $request['description']]);
        $dish->update(['ingredients' => $request['ingredients']]);
        $dish->update(['price' => $request['price']]);
        $dish->update(['show' => $data['show']]);
        // dd($dish, $data);
        // $dish->update(['description' => $newCoverImgPath]);
        // $dish->update(['ingredients' => $newCoverImgPath]);
        // $dish->update(['price' => $newCoverImgPath]);
        // $dish->update(['show' => $newCoverImgPath]);
        return redirect()->route("dishes.show", compact('slug'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
        {
            $user = Auth::user();
            $restaurant_id = Auth::user()->restaurant->id;
            $dish_array = Dish::where('restaurant_id', $user->id)
            ->where('slug', $slug)
            ->get(); 
            $dish = $dish_array[0];           

            if ($restaurant_id !== $dish->restaurant_id) {
                abort(403);
            }
            if ($dish->cover_img) {
                Storage::delete($dish->cover_img);
            }
    
            $dish->delete();
    
            return redirect()->route("dishes.index", $dish->slug);
        }
}
