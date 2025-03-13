<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            
            $table->string('nom_salle'); // Ajouter la colonne nom_salle
            $table->dropColumn('room_id'); // Supprimer room_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->unsignedBigInteger('room_id'); // Restaurer room_id
            $table->dropColumn('nom_salle'); // Supprimer nom_salle si on annule la migration
            //
        });
    }
};
