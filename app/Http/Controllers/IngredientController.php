<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientsRequest;
use App\Http\Requests\UpdateIngredientsRequest;
use App\Models\Ingredient;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIngredientsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredient $ingredients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIngredientsRequest $request, Ingredient $ingredients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredients)
    {
        //
    }
}