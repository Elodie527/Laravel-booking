<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $salles=Room::all();
        return view('adminpage',compact('salles'));
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
    public function store(Request $request)
    {
        request()->validate([
            'name'=> ['required'],
            'capacity'=> ['required'],

        ]);
        Room::create([
            'name'=> $request->input('name'),
            'capacity'=>$request->input('capacity'),
        ]);
        return redirect()->back()->with('success','salle ajoute');
        //
    }

    /**
     * Display the specified resource.
     */
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
        $salle=Room::find($id);
        if($salle){
            $salle->delete();
            return redirect()->route('adminpage')->with('success','salle supprime');
        }else{
            return redirect()->route('adminpage')->with('success','echec');
        }
 
    }
}
