<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\SuperHeroController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\GenderApiController;
use App\Http\Controllers\SupeheroApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('genders', GenderController::class);
Route::resource('superhero', SuperHeroController::class);
Route::resource('universes', UniverseController::class);


Route::get('/genders-api',[GenderApiController::class,'index']);
Route::get('/genders-api/{name}',[GenderApiController::class, 'show']);
Route::get('/superhero-api',[SupeheroApiController::class,'index']);
Route::get('/superhero-api/{name}',[SupeheroApiController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
