<?php

namespace App\Http\Controllers;
use App\Models\Universe;

use Illuminate\Http\Request;

class UniverseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universes = Universe::all();
        return view('universes.index',compact('universes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('universes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Universe::create([
              'name' => $request->name
       ]);
       return to_route('universes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $universes = Universe::find($id);
        return view('universes.show',compact('universes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $universes = Universe::find($id);
        return view('universes.edit',compact('universes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $universes = Universe::findOrFail($id);
        $universes->update([
            'name' => $request->name,
        ]);
    
        return redirect()->route('universes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $universes = Universe::findOrFail($id);
        $universes->delete();
        return redirect()->route('universes.index');
    }
}
