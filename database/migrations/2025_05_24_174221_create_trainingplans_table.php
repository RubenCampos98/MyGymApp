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
        Schema::create('TrainingPlans', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Name', 20)->unique('unique_TrainingPlan');
            $table->integer('NumberOfDays');
            $table->string('WeekDays', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TrainingPlans');
    }
};
