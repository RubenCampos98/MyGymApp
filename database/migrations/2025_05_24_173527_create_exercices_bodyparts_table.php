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
        Schema::create('Exercices_BodyParts', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_Exercice');
            $table->unsignedBigInteger('Id_BodyPart');
            $table->primary(['Id_Exercice', 'Id_BodyPart']);

            $table->foreign('Id_Exercice')->references('Id')->on('Exercices')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('Id_BodyPart')->references('Id')->on('BodyParts')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Exercices_BodyParts');
    }
};
