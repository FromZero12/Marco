<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BeverageController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/food', [FoodController::class, 'index'])->name('showFood');
Route::post('/food/{id}', [FoodController::class, 'store'])->name('addFood');
Route::get('/beverage', [BeverageController::class, 'index'])->name('showBeverage');
Route::post('/beverage/{id}', [BeverageController::class, 'store'])->name('addBeverage');
Route::get('/basket', [BasketController::class, 'index'])->name('showBasket');
Route::patch('/basket/{id}', [BasketController::class, 'plus'])->name('plusItem');
Route::post('/basket/{id}', [BasketController::class, 'minus'])->name('minusItem');
Route::post('/search', [SearchController::class, 'handleSearch'])->name('searchItem');
