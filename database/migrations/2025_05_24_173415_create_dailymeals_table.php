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
        Schema::create('DailyMeals', function (Blueprint $table) {
            $table->id('Id');
            $table->date('Day');
            $table->date('Month');
            $table->date('Year');
            $table->string('EatenBy', 50);
            $table->float('Total_Calories');
            $table->float('Total_Protein');
            $table->float('Total_Carbs');
            $table->unique(['Day', 'Month', 'Year', 'EatenBy'], 'unique_DailyMeal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DailyMeals');
    }
};
