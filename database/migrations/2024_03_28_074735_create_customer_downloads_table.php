<?php

use App\Models\Customer;
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
        Schema::create('customer_downloads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('size');
            $table->string('value');
            $table->foreignIdFor(Customer::class);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_downloads');
    }
};
