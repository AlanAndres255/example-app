<?php

namespace App\Http\Controllers;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {
       dump(Gender::all());
       $gender = Gender::all();
       return view('gender',compact('gender'));
    }
}