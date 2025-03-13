<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;
use App\Models\User;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*public function index()
    {
        $reversation=Reversation::with('room ')->get();
        return view('reservations.index',compact('reservations'));
    }*/

    /**
     * Show the form for creating a new resource.
     */


     public function create($salle)
{
    return view('bravia', compact('salle'));
}

    public function store(Request $request)

{
    dd($request->all());
    // Valider les données envoyées
    $validated = $request->validate([
        'nom_salle' => 'required|string', // Le nom de la salle est obligatoire
        'reserved_date' => 'required|date', // Date de réservation
        'start_time' => 'required|date_format:H:i', // Heure de début
        'end_time' => 'required|date_format:H:i|after:start_time', // Heure de fin, doit être après l'heure de début
    ]);

    // Créer la réservation et l'enregistrer dans la base de données
    Reservation::create([
        'user_id' => auth()->id(), // L'utilisateur connecté, tu dois être connecté pour soumettre une réservation
        'nom_salle' => $request->nom_salle, // Le nom de la salle
        'reserved_date' => $request->reserved_date, // Date de réservation
        'start_time' => $request->start_time, // Heure de début
        'end_time' => $request->end_time, // Heure de fin
    ]);

    // Rediriger l'utilisateur avec un message de succès
    return redirect()->route('reservations.create')->with('success', 'Réservation effectuée avec succès.');
}

    

    
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}