<?php

namespace App\Http\Controllers;
use App\Models\Gender;

use Illuminate\Http\Request;

class GenderApiController extends Controller
{
    public function index(){
        $genders = Gender::all();
        return response()->json($genders);    
    }

    public function show($id){
        $genders = Gender::with('superheroes')->findOrFail($id);
        return response()->json($genders);
    }
    /*public function show($name){
        $gender = Gender::with('superheroes')->where('name', $name)->firstOrFail();
        return response()->json($gender);
    }*/
}