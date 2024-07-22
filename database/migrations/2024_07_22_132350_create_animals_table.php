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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome dell'animale
            $table->string('species'); // Specie dell'animale
            $table->string('breed')->nullable(); // Razza dell'animale (opzionale)
            $table->string('image_url')->nullable(); // Url immaggine dell'animale
            $table->float('weight')->nullable(); // Peso
            $table->text('description')->nullable(); // Descrizione
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};