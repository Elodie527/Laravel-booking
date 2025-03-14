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
    $reservations = Reservation::all();  // Récupère toutes les réservations
    return view('reservation.index', compact('reservations'));  // Affiche la liste des réservations
}
*/



    /**
     * Show the form for creating a new resource.
     */


     /*public function create($salle)
     {
         return view('bravia', compact('salle')); // Ou compacter 'nom_salle' si tu l'utilises
     }*/

     public function store(Request $request)
     {
         // Valider les données envoyées par le formulaire
         $validated = $request->validate([
             'nom_salle' => 'required|string',
             'reserved_date' => 'required|date',
             'start_time' => 'required|string',
             'end_time' => 'required|string',  // Valider que l'heure de fin est après l'heure de début
         ]);
 
         // Créer une nouvelle réservation dans la base de données
         Reservation::create([
             'user_id' => auth()->id(),  
             'nom_salle' => $validated['nom_salle'],  // Le nom de la salle
             'reserved_date' => $validated['reserved_date'],  // Date de la réservation
             'reserved_date' => Carbon::parse($request->reserved_date),
            'start_time'    => Carbon::parse($request->start_time),
            'end_time'      => Carbon::parse($request->end_time),

         ]);
 
         // Rediriger avec un message de succès
         return redirect()->route('reservations.create', ['salle' => $validated['nom_salle']])
                          ->with('success', 'Réservation effectuée avec succès.');
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


