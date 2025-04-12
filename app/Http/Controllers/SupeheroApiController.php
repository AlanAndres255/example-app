<?php

namespace App\Http\Controllers;
use App\Models\Gender;
use App\Models\Universe;
use App\Models\SuperHero;
use Illuminate\Http\Request;

class SupeheroApiController extends Controller
{
    public function index(){
        $superheroes = SuperHero::all();
        return response()->json($superheroes);    
    }

    public function show($id){
        $superhero = SuperHero::with('gender','universe')->findOrFail($id);
        return response()->json($superhero);
    }
    /*public function show($name){
        $superhero = SuperHero::with('gender','universe')->where('name',$name)->firstOrFail();
        return response()->json($superhero);
    }*/
}
