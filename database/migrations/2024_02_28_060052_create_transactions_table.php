<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Customer;
use App\Models\Freezone;
use App\Models\FreezoneBooking;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id');
            $table->string('message');
            $table->string('reference_id')->nullable();
            $table->decimal('amount', $precision = 8, $scale = 2);
            $table->foreignIdFor(FreezoneBooking::class)->nullable();
            $table->foreignIdFor(Customer::class);
            $table->enum('payment_status', ['successful', 'failed', 'pending', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        +Schema::dropIfExists('transactions');
    }
};
