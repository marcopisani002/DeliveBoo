<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('restaurants', RestaurantController::class);
    Route::get("/dishes/create", [DishController::class, "create"])->name('dishes.create');
    // Route::resource('dishes', DishController::class);
    Route::get("/dishes", [DishController::class, "index"])->name('dishes.index');
    Route::get("/dishes/{slug}", [DishController::class, "show"])->name('dishes.show');
    Route::get('/dishes/{slug}/edit', [DishController::class, 'edit'])->name('dishes.edit');
    Route::put('/dishes/{slug}', [DishController::class, 'update'])->name('dishes.update');
    Route::delete('/dishes/{slug}', [DishController::class, 'destroy'])->name('dishes.destroy');
});
Route::post("/dishes", [DishController::class, "store"])->name('dishes.store');

// Route::middleware(['auth', 'verified'])
//     ->group(function () {
//     Route::get("/dishes", [DishController::class, "index"])->name('dishes.index');
//     Route::get("/dishes/{slug}", [DishController::class, "show"])->name('dishes.show');
//     Route::get("/dishes/create", [DishController::class, "create"])->name('dishes.create');
//     Route::get('/dishes/{slug}/edit', [DishController::class, 'edit'])->name('dishes.edit');
//     Route::put('/dishes/{slug}', [DishController::class, 'update'])->name('dishes.update');
//     Route::delete('/dishes/{slug}', [DishController::class, 'destroy'])->name('dishes.destroy');
// });

require __DIR__.'/auth.php';
