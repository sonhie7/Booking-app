<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'prix_unitaire' => 'required|numeric',
            'type_chambre' => 'required|array',
            'type_chambre.*' => 'string|max:255', // Validate each type_chambre item
        ]);

        // Convert type_chambre array to string
        $data = $request->all();
        $data['type_chambre'] = implode(',', $request->type_chambre);

        Hotel::create($data);

        return redirect()->route('hotels.index')->with('success', 'Hôtel créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('hotels.show', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('hotels.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'prix_unitaire' => 'required|numeric',
            'type_chambre' => 'required|string|max:255',
        ]);

        $hotel->update($request->all());

        return redirect()->route('hotels.index')->with('success', 'Hôtel mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotels.index')->with('success', 'Hôtel supprimé avec succès.');
    }
}
