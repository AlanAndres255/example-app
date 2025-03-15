<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperHeroController;


Route::get('/', function () {
    echo 'Hello, World!';
    dump(Universe::all());
});
Route::resource('genders',GenderController::class);
//Route::get('/universes',[UniverseController::class,'index']);
//Route::get('/create-universes.',[UniverseController::class,'index']);
Route::resource('universes',UniverseController::class);
Route::resource('superhero',SuperHeroController::class);