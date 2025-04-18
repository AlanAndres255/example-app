<?php

namespace App\Http\Controllers;
use App\Models\Gender;
use App\Models\Universe;
use App\Models\SuperHero;
use Illuminate\Http\Request;

class SuperHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = SuperHero::all();
        return view('superhero.index',compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::select('id', 'name')->get();
        $universes = Universe::select('id', 'name')->get();
        return view('superhero.create', compact('genders', 'universes'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SuperHero::create([
            "gender_id" => $request->gender_id,
            "real_name" => $request->real_name,
            "universe_id" => $request->universe_id,
            "name" => $request->name,
            "picture" => $request->picture,            
        ]);
    
        return redirect()->route('superhero.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superheroes = SuperHero::find($id);
        return view('superhero.show',compact('superheroes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superheroes = SuperHero::find($id);
        $genders = Gender::select('id', 'name')->get();
        $universes = Universe::select('id', 'name')->get();
        return view('superhero.edit',compact('superheroes','genders','universes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gender_id' => 'required|exists:genders,id',
            'real_name' => 'nullable|string|max:50',
            'universe_id' => 'required|exists:universes,id',
            'name' => 'required|string|max:50',
            'picture' => 'nullable|string|max:200',
        ]);
    
        $superheroes = SuperHero::findOrFail($id);
        $superheroes->update([
            "gender_id" => $request->gender_id,
            "real_name" => $request->real_name,
            "universe_id" => $request->universe_id,
            "name" => $request->name,
            "picture" => $request->picture, 
        ]);
    
        return redirect()->route('superhero.index');           
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $superheroes = SuperHero::findOrFail($id);
        $superheroes->delete();
        return redirect()->route('superhero.index');
    }
}
