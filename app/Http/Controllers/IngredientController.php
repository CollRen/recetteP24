<?php

namespace App\Http\Controllers;

use App\Models\etapes;
use App\Models\Ingredient;
use App\Models\Recette;
use App\Models\Umesure;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredient.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->ingredient = [
            'nom' => $request->nom,
            'quantite' => $request->quantite,
            'umesure_id' => $request->umesure_id,
            'user_id' => 1,
            'recette_id' => $request->recette_id
        ];

        Ingredient::create($this->ingredient);

        $this->recette = Recette::find($request->recette_id);
        $this->uMesures = Umesure::all();

        $this->ingredients = $this->recette->ingredients();
        dd($this->ingredients);
        
        foreach ($this->ingredients as $ingredient) {
            # code...
        }
        // dd($this->recette);

        // $this->ingredients = Ingredient::find(1);
        // return back()->withSuccess('Category created successfully!');
        return view('recette.add-ingredient', $this->data);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredient $ingredient)
    {   
        return view('ingredient.edit', ['ingredient' => $ingredient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        
        $request->validate([
            'ingredient_en' => 'required|max:30',
            'ingredient_fr' => 'required|max:30',
        ]);

        $laIngredient = [
            'en' => $request->ingredient_en,
            'fr' => $request->ingredient_fr,
        ];
        
        
        $ingredient->update([
            'nom' => $laIngredient
        ]);

        return redirect()->route('ingredient.edit', $ingredient->id)->with('success', 'Ingredient updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient)
    {
        //
    }
}
