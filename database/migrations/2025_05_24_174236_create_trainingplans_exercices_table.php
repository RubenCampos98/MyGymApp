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
        Schema::create('TrainingPlans_Exercices', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_TrainingPlan');
            $table->unsignedBigInteger('Id_Exercice');
            $table->primary(['Id_TrainingPlan', 'Id_Exercice']);

            $table->foreign('Id_TrainingPlan')->references('Id')->on('TrainingPlans')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('Id_Exercice')->references('Id')->on('Exercices')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TrainingPlans_Exercices');
    }
};
