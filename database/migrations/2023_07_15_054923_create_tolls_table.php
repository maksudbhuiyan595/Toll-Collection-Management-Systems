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
            $table->foreignId('toll_category_id')->constrained('toll_chats')->restrictOnDelete();
            $table->foreignId('toll_chart_id')->constrained('toll_chats')->restrictOnDelete();
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
