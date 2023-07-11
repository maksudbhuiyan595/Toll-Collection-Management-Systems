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
            $table->string('customer_name',100);
            $table->string('vehicle_name',100);
            $table->string('vehicle_plade_name',100)->nullable();
            $table->string('vehicle_plade_number');
            $table->string('driving_licence');
            $table->integer('customer_phone');
            $table->text('customer_address');
            $table->integer('toll');
            $table->string('vehicle_image');
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
