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
        Schema::create('cibles', function (Blueprint $table) {
            $table->id('id_cible');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('ville');
            $table->integer('age');
            $table->string('photo');
            $table->string('raison');
            $table->text('information_supplementaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cibles');
    }
};
