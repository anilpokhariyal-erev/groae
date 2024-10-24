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
        Schema::create('package_booking_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_booking_id');
            $table->text('attribute_name'); // The name of the package attribute
            $table->text('attribute_value'); // The selected value for the attribute
            $table->integer('quantity');
            $table->decimal('price_per_unit', 10, 2);
            $table->decimal('total_cost', 10, 2);
            $table->text('description')->nullable(); // Optional notes or details
            $table->tinyInteger('status')->default(1); // 0: Inactive, 1: Active
            $table->timestamps();
            $table->softDeletes();
        
            // Foreign keys
            $table->foreign('package_booking_id')->references('id')->on('package_bookings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_booking_details');
    }
};
