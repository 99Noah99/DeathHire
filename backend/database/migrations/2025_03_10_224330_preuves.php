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
        Schema::create('preuves', function (Blueprint $table) {
            $table->id('id_preuve');
            $table->unsignedBigInteger('id_commande')->nullable();
            $table->string('preuve_fichier');
            $table->timestamps();
            $table->foreign('id_commande')->references('id_commande')->on('commandes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preuves');
    }
};
