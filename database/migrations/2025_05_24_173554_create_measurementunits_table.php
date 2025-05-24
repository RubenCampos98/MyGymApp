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
        Schema::create('MeasurementUnits', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Name', 20)->unique('unique_MeasurementUnit');
            $table->string('Symbol', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MeasurementUnits');
    }
};
