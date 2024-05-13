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
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->double('quantite');
            $table->unsignedBigInteger('umesure_id');
            $table->unsignedBigInteger('recette_id');
            $table->timestamps();
            $table->foreign('umesure_id')->references('id')->on('umesures')->onDelete('cascade');
            $table->foreign('recette_id')->references('id')->on('recettes')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ingredients');
    }
};
