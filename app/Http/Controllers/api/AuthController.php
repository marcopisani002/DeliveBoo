<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


// class AuthController extends Controller
// {
//     //registering a new user
//     public function register(Request $request){
//         $data = $request->validate([
//             'name' => 'required|string',
//             'email' => 'required|string|unique:users,email',
//             'password' => 'required|string|confirmed',
//         ]);

//         $user = User::create([
//             'name' => $data['name'],
//             'email' => $data['email'],
//             'password' => bcrypt($data['password']),
//         ]);

//         $token = $user->createToken('generateToken')->plainTextToken;

//         $dataToken = [
//             'user' => $user,
//             'token' => $token,
//         ];

//         return response("register", $dataToken);
//     }

//     //log out user
//     public function logoutUser(){
//         auth()->user()->tokens()->delete();

//         return [
//             'message' => 'Logout Done with Success',
//         ];
//     }
// }