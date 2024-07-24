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
        return view('animals.index', compact("animals")); //mostra tutti gli elementi
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animals.create'); //rimanda al form per creare un nuovo elemento
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all(); //Richiedo i dati
        $newAnimal = new Animal($data); // Mass assignment tramite le fillable già inserite nel model Animal
        // $newAnimal->name = $data["name"];
        // $newAnimal->species = $data["species"];
        // $newAnimal->breed = $data["breed"];  Mano
        // $newAnimal->image_url = $data["image_url"];
        // $newAnimal->weight = $data["weight"];
        // $newAnimal->description = $data["description"];
        $newAnimal->save(); // Salvo
        // ! $newAnimal = Animal::create($data); equivale a new Animal + save
        // > dd($newAnimal); Testiamo se è tutto corretto
        // ? dd($data);
        return redirect()->route('animals.show', $newAnimal); // Crea l'elemento con i dati passati dal form e ci mostra l'elemento in show
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('animals.show', compact("animal")); // mostro il singolo elemento
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal')); //ritorno il form
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        // dd($request->all());
        $data = $request->all(); //richiedo tutti i dati
        $animal->update($data); // modifico i dati del singolo animale attraverso il mio form con i value già presenti
        return redirect()->route('animals.show', $animal)->with('message', $animal->name . " Has Been Edited");
    }                                                     //with ci permette di inviare il value di message così possiamo visualizzarlo dopo avere cliccato UPDATE

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animals.index')->with('message', "N:" . $animal->id . " " . $animal->name . " Has Been Deleted");
    }                                               //with ci permette di inviare il value di message così possiamo visualizzarlo dopo avere cliccato DELETE
}
