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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id('id_commande');
            $table->float("montant_total");
            $table->unsignedBigInteger('id_cible');
            $table->foreign('id_cible')->references('id_cible')->on('cibles');
            $table->unsignedBigInteger('id_tueur');
            $table->foreign('id_tueur')->references('id_tueur')->on('tueur');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->unsignedBigInteger('id_statut');
            $table->foreign('id_statut')->references('id_statut')->on('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
