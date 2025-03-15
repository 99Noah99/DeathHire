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
        Schema::create('tueurs', function (Blueprint $table) {
            $table->id('id_tueur');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('nationalite');
            $table->string('description');
            $table->string('prix');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tueurs');
    }
};
