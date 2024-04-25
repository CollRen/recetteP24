<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecettesRequest;
use App\Http\Requests\UpdateRecettesRequest;
use App\Models\Recettes;

class RecettesController extends Controller
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
    public function store(StoreRecettesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recettes $recettes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recettes $recettes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecettesRequest $request, Recettes $recettes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recettes $recettes)
    {
        //
    }
}
