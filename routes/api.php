<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\DishController;
use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//old notes:
// Route::post("/restaurant-check", [RestaurantController::class, "store"]);
// Route::post('/user-registration', [AuthController::class, "store"]);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/restaurants", [RestaurantController::class, "index"]);
Route::get("/restaurants/{restaurant}", [RestaurantController::class, "show"]);
Route::get("/restaurants/types/{type}",[RestaurantController::class,"TypeSearch"]);

Route::get("/types", [TypeController::class, "index"]);

Route::get("/dishes", [DishController::class, "index"]);
Route::get("/dishes/{dish}", [DishController::class, "show"]);

Route::post("/contacts", [ContactController::class, "store"]);
//order.store = which is a form whre the customer put his information (the checkout step)
