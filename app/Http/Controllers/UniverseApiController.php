<?php

namespace App\Http\Controllers;
use App\Models\Universe;

use Illuminate\Http\Request;

class UniverseApiController extends Controller
{
    public function index(){
        $universes = Universe::all();
        return response()->json($universes);    
    }

    /*public function show($id){
        $universe = Universe::with('superheroes')->findOrFail($id);
        return response()->json($universe);
    }*/
    public function show($name){
        $universe = Universe::with('superheroes')->where('name', $name)->firstOrFail();
        return response()->json($universe);
    }
}