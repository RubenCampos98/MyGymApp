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
        Schema::create('Meals_DailyMeals', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_Meal');
            $table->unsignedBigInteger('Id_DailyMeal');
            $table->primary(['Id_Meal', 'Id_DailyMeal']);

            $table->foreign('Id_Meal')->references('Id')->on('Meals')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('Id_DailyMeal')->references('Id')->on('DailyMeals')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Meals_DailyMeals');
    }
};
