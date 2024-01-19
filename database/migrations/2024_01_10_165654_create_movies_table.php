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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            // Agregar la columna director_id
            $table->foreignId('director_id')->constrained();
            $table->string('title');
            $table->year('year');
            $table->text('plot');
            $table->decimal('rating', 3, 1);
            $table->enum('visibility', ['hidden', 'visible'])->default('visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
