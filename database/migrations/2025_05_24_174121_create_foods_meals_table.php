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
        Schema::create('Foods_Meals', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_Food');
            $table->unsignedBigInteger('Id_Meal');
            $table->primary(['Id_Food', 'Id_Meal']);

            $table->foreign('Id_Food')->references('Id')->on('Foods')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('Id_Meal')->references('Id')->on('Meals')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Foods_Meals');
    }
};
