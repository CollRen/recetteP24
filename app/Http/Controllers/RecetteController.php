<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecettesRequest;
use App\Http\Requests\UpdateRecettesRequest;
use App\Models\Recette;
use App\Models\Ingredient;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }


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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecettesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recette $recette, Request $request)
    {

        $category = Category::find(1)->recette;
        dd($category);


        // Différentes façon d'obtenir les ingrédients
        // 1.
        foreach ($recette->ingredients as $ingredient) {
            // ...
        }

        //2.1 (Ordre alphabétique)
        $ingredients = Recette::find(1)->ingredients()->orderBy('name')->get();

        //2.2 (2e argument: Ordre que l'on choisit en )
        return $this->belongsToMany(Ingredient::class, 'ingredient_recette');

        //
        /**
         * 2.3 (33 is the 
         * foreign key name of the model on which you are defining the relationship
         * 4th Arg: foreign key name of the model that you are joining to
         */
        return $this->belongsToMany(Ingredient::class, 'ingredient_recette', 'recette_id', 'ingredient_id');



    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recette $recettes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecettesRequest $request, Recette $recettes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recette $recettes)
    {
        //
    }
}
