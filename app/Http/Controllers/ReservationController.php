<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
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
            'id_internaute' => 'required|integer|exists:internautes,id',
            'id_hotel' => 'required|integer|exists:hotels,id',
            'date_debut_sejour' => 'required|date',
            'date_fin_sejour' => 'required|date|after_or_equal:date_debut_sejour',
            'titre' => 'required|string|max:255',
        ]);

        Reservation::create($request->all());

        return redirect()->route('reservations.index')->with('success', 'Réservation créée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'id_internaute' => 'required|integer|exists:internautes,id',
            'id_hotel' => 'required|integer|exists:hotels,id',
            'date_debut_sejour' => 'required|date',
            'date_fin_sejour' => 'required|date|after_or_equal:date_debut_sejour',
            'titre' => 'required|string|max:255',
        ]);

        $reservation->update($request->all());

        return redirect()->route('reservations.index')->with('success', 'Réservation mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index')->with('success', 'Réservation supprimée avec succès.');
    }
}
