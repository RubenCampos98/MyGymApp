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
        Schema::create('Exercices', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Name', 20)->unique('unique_Exercice');
            $table->string('Description', 255)->nullable();
            $table->string('Link', 255)->nullable();
            $table->string('Image', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Exercices');
    }
};
