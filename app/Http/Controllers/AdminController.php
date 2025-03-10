<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    public function show(){
        return view ('adminlogin');
    }
    public function login(Request $request){
        $nom='admin';
        $motdepasse='password123';

        $nom_new=$request->input('username');
        $motdepasse_new=$request->input('password');
        if($nom_new===$nom && $motdepasse_new===$motdepasse ){
            session::put('Admin connecte',true);
            return redirect()->route('adminpage');
        }
        return back()->with('error','identifications incorrectes');
    }
}
