<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\StarwarsController;
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

/*Route::get('/', function () {
    $actors = Actor::get();
    return view('welcome', ['actors' => $actors]);
});*/

Route::get('/', [ActorController::class, 'getAll']);
Route::post('/actors/filter', [ActorController::class, 'filter']);
Route::get('/starwars', [StarwarsController::class, 'getAll']);
Route::post('/starwars/search', [StarwarsController::class, 'getStarwars']);
