<?php

use App\Models\Toll_chart;
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
            $table->string('collection_status')->default('offline');
            $table->foreignId('pay_category_id')->constrained('categories')->cascadeOnDelete();
            $table->foreignId('pay_vehicle_id')->constrained('vehicles')->cascadeOnDelete();
            $table->foreignId('pay_chart_id')->constrained('toll_charts')->cascadeOnDelete();
            $table->foreignId('pay_customer_id')->constrained('customers')->cascadeOnDelete();
            $table->foreignId('pay_toll_id')->constrained('tolls')->cascadeOnDelete();
            $table->decimal('toll_price', 10, 2);
            $table->decimal('daily_total', 10, 2)->nullable(); // Daily total column
            $table->decimal('monthly_total', 10, 2)->nullable(); // Monthly total column
            $table->decimal('yearly_total', 10, 2)->nullable();
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
