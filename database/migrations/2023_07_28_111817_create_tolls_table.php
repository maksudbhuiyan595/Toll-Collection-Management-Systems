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
        Schema::create('tolls', function (Blueprint $table) {
            $table->id();
            $table->string('toll_name');
            $table->integer('gate_number');
            $table->integer('road_line');
            $table->foreignId('toll_category_id');
            $table->foreignId('toll_chart_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tolls');
    }
};
