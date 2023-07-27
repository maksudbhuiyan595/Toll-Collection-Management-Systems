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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('time');
            $table->foreignId('pay_category_id');
            $table->foreignId('pay_vehicle_id')->constrained('vehicles')->restrictOnDelete();
            $table->foreignId('pay_chart_id')->constrained('toll_chats')->restrictOnDelete();
            $table->foreignId('pay_customer_id')->constrained('customers')->restrictOnDelete();
            $table->foreignId('pay_toll_id')->constrained('tolls')->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
