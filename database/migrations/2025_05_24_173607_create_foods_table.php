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
        Schema::create('Foods', function (Blueprint $table) {
            $table->id('Id');
            $table->unsignedBigInteger('Id_MeasurementUnit');
            $table->string('Name', 20)->unique('unique_Food');
            $table->integer('Quantity');
            $table->integer('Calories');
            $table->integer('Protein');
            $table->integer('Carbohydrates');
            $table->boolean('IsInMeal');
            $table->string('Description', 255)->nullable();

            $table->foreign('Id_MeasurementUnit')->references('Id')->on('MeasurementUnits')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Foods');
    }
};
