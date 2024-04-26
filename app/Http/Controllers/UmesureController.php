<?php

namespace App\Http\Controllers;

use App\Models\Umesure;
use Illuminate\Http\Request;

class UmesureController extends Controller
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
        return view('Umesure.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Umesure_en' => 'required|max:30',
            'Umesure_fr' => 'required|max:30',
        ]);
        $Umesure = [
            'en' => $request->Umesure_en,
/*             'fr' => $request->Umesure_fr, */
        ];
        if($request->Umesure_fr != null) { $Umesure = $Umesure + ['fr' => $request->Umesure_fr];};
        
        Umesure::create([
            'Umesure' => $Umesure
        ]);
        return back()->withSuccess('Umesure created successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Umesure $Umesure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Umesure $Umesure)
    {   
        return view('Umesure.edit', ['Umesure'=>$Umesure['Umesure']]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Umesure $Umesure)
    {
        $request->validate([
            'Umesure_en' => 'required|max:30',
            'Umesure_fr' => 'required|max:30',
        ]);

        $laUmesure = [
            'en' => $request->Umesure_en,
            'fr' => $request->Umesure_fr,
        ];
        
        $Umesure->update([
            'Umesure' => $laUmesure
        ]);

        return redirect()->route('Umesure.edit', $Umesure->id)->with('success', 'Umesure updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Umesure $Umesure)
    {
        //
    }
}
