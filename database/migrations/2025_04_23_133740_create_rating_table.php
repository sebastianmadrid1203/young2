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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();

            $table->tinyInteger('value'); // Valor del 1 al 5
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Usuario que califica
            $table->foreignId('article_id')->constrained()->onDelete('cascade'); // Artículo calificado

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};