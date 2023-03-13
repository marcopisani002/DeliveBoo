<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        return response()->json([
            'response' => Type::all(),
        ]); 
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $newTypes = Type::create($data);
        return response()->json($newTypes);
    }

    public function show(Type $type)
    {
        $type->all();
        return response()->json($type);
    }
}
