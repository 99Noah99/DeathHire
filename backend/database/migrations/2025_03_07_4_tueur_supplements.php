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
        Schema::create('tueur_supplements', function (Blueprint $table) {
            $table->id('id_tueur_supplement');
            $table->unsignedBigInteger('id_tueur');
            $table->unsignedBigInteger('id_supplement');
            $table->timestamps();
            $table->foreign('id_tueur')->references('id_tueur')->on('tueurs');
            $table->foreign('id_supplement')->references('id_supplement')->on('supplements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tueur_supplements');
    }
};
