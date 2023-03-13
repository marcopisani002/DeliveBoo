<?php


use App\Http\Controllers\Api\DishController;
use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\AuthController;
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
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //     return $request->user();
    // });


//PUBLIC:
Route::get("/restaurants", [RestaurantController::class, "index"]);

Route::get("/types", [TypeController::class, "index"]);

Route::post('/register', [AuthController::class, "register"]);

Route::get("/dishes", [DishController::class, "index"]);
//order.store = which is a form whre the customer put his information (the checkout step)



//PRIVATE:

Route::group(['middleware' => 'auth:sanctum'], function(){
    //RESTAURANT
    Route::post("/restaurants", [RestaurantController::class, "store"]);
    Route::get("/restaurants/{restaurant}", [RestaurantController::class, "show"]);
    
    //DISH
    // Route::get("/dishes", [DishController::class, "index"]);
    Route::post("/dishes", [DishController::class, "store"]);
    Route::get("/dish/{dish}", [DishController::class, "show"]);
    Route::put("/dish/{dish}", [DishController::class, "update"]);
    Route::delete("/dishes/{dish}", [DishController::class, "destroy"]);

    //TYPE of cuisine
    Route::get("/types", [TypeController::class, "index"]);
    Route::post("/types", [TypeController::class, "store"]);

    //USER
    Route::get('/logout', [AuthController::class, "logoutUser"]);

    //ORDER
    //index == where we visualise all user and cart infromations 
});