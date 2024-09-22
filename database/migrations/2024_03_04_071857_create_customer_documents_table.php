<?php

use App\Models\Customer;
use App\Models\Freezone;
use App\Models\FreezoneBooking;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer_documents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->enum('request_type', ['document', 'detail'])->default('detail');
            $table->json('format')->nullable();
            $table->string('value')->nullable();
            $table->foreignIdFor(Customer::class);
            $table->enum('status', ['requested', 'submitted', 'approved', 'rejected'])->default('requested');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_documents');
    }
};
