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
        Schema::create('Weights', function (Blueprint $table) {
            $table->id('Id');
            $table->unsignedBigInteger('Id_User');
            $table->float('Value');
            $table->dateTime('Date');
            $table->unique(['Id_User', 'Date'], 'unique_UserWeight');

            $table->foreign('Id_User')->references('Id')->on('Users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Weights');
    }
};
