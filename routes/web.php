<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;
    
    Route::get('/acceuil', function () {
        return view('acceuil');
    })->name('acceuil');
    
    Route::get('/', function () {
        return view('auth.register');

    });
    Route::get('/login', function () {
        return view('auth.login');

    });

    
    
    Route::get('/adminlogin', function () {
        return view('adminlogin');
    })->name('adminlogin');
    
    Route::get('/adminpage', function () {
        return view('adminpage');
    })->name('adminpage');
    
    Route::get('/categories', function () {
        return view('categories');
    })->name('categories');
    
    Route::get('/adminpage', [RoomController::class, 'index'])->name('adminpage');
    
    
    
    
    
    
    
    Route::post('/adminlogin', function (Request $request) {
        return redirect()->route('adminpage')->with('message', 'Connexion réussie !');
    })->name('adminlogin.post');
    
    
    Route::post('/salle', [RoomController::class, 'store'])->name('salle.store');
    
    Route::get('/salle/{id}', [RoomController::class, 'destroy'])->name('salle.delete');
    
    
    
    Route::get('/clients', function () {
        return view('clients');
    });
    
    Route::get('/bravia', function () {
        return view('bravia');
    });
    
    Route::get('/enaref', function () {
        return view('enaref');
    });
    Route::get('/laico', function () {
        return view('laico');
    });
    Route::get('/palaisdessports', function () {
        return view('palaisdessports');
    });
    Route::get('/rb', function () {
        return view('rb');
    });
    Route::get('/silmande', function () {
        return view('silmande');
    });
    
    Route::get('/conference', function () {
        return view('conference');
    });
    
    Route::get('/palace', function () {
        return view('palace');
    });
    
    Route::get('/banquet', function () {
        return view('banquet');
    });
    Route::get('/unz', function () {
        return view('unz');
    });
    Route::get('/polyvalente', function () {
        return view('polyvalente');
    });
    Route::get('/yelba', function () {
        return view('yelba');
    });
    Route::get('/olympia', function () {
        return view('olympia');
    });
    
    Route::get('/grandhotel', function () {
        return view('grandhotel');
    });
    
    Route::get('/business', function () {
        return view('business');
    });
    
    
    


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    
});


// Route pour afficher le formulaire (GET)
Route::get('/reservations/{salle}', [ReservationController::class, 'create'])->name('reservations.create');

// Route pour enregistrer la réservation (POST)
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');





require __DIR__.'/auth.php';

