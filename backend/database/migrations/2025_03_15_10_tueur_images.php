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
        Schema::create('tueur_images', function (Blueprint $table) {
            $table->id('id_image');
            $table->string('nom');
            $table->string('chemin');
            $table->unsignedBigInteger('id_tueur');
            $table->foreign('id_tueur')->references('id_tueur')->on('tueurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tueur_images');
    }
};
