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
        return view('umesure.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'umesure_en' => 'required|max:30',
            'umesure_fr' => 'required|max:30',
        ]);
        $umesure = [
            'en' => $request->umesure_en,
            /*             'fr' => $request->umesure_fr, */
        ];
        if ($request->umesure_fr != null) {
            $umesure = $umesure + ['fr' => $request->umesure_fr];
        }
        ;

        Umesure::create([
            'nom' => $umesure
        ]);
        return back()->withSuccess('umesure created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Umesure $umesure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Umesure $umesure)
    {
        return view('umesure.edit', ['umesure' => $umesure['umesure']]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Umesure $umesure)
    {
        $request->validate([
            'Umesure_en' => 'required|max:30',
            'Umesure_fr' => 'required|max:30',
        ]);

        $laUmesure = [
            'en' => $request->umesure_en,
            'fr' => $request->umesure_fr,
        ];

        $umesure->update([
            'nom' => $laUmesure
        ]);

        return redirect()->route('umesure.edit', $umesure->id)->with('success', 'Umesure updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Umesure $umesure)
    {
        //
    }
}
