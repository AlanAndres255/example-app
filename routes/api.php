<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseApiController;
use App\Http\Controllers\GenderApiController;
use App\Http\Controllers\SupeheroApiController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/universes', [UniverseApiController::class, 'index']);
Route::get('/universes/{id}', [UniverseApiController::class, 'show']);

Route::get('/genders',[GenderApiController::class,'index']);
Route::get('/genders/{id}',[GenderApiController::class, 'show']);

Route::get('/superhero',[SupeheroApiController::class,'index']);
Route::get('/superhero/{id}',[SupeheroApiController::class, 'show']);