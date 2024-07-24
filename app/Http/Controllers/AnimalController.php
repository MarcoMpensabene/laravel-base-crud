<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact("animals"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newAnimal = new Animal($data); // Mass assignment
        // $newAnimal->name = $data["name"];
        // $newAnimal->species = $data["species"];
        // $newAnimal->breed = $data["breed"];  Mano
        // $newAnimal->image_url = $data["image_url"];
        // $newAnimal->weight = $data["weight"];
        // $newAnimal->description = $data["description"];
        $newAnimal->save();
        // > dd($newAnimal); Testiamo se è tutto corretto
        // ? dd($data);
        return redirect()->route('animals.show', $newAnimal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('animals.show', compact("animal"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        // dd($request->all());
        $data = $request->all();
        $animal->update($data);
        return redirect()->route('animals.show', $animal)->with('message', $animal->name . " Has Been Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animals.index')->with('message', "N:" . $animal->id . " " . $animal->name . " Has Been Deleted");
    }
}
