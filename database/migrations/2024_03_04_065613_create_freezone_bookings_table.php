<?php

use App\Models\License;
use App\Models\Customer;
use App\Models\Freezone;
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
        Schema::create('freezone_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('requested');
            $table->string('client_status')->default('requested');
            $table->string('office');
            $table->string('visa_package');
            $table->string('license_validity');
            $table->string('activity_group');
            $table->string('activity_group_selection');
            $table->string('activities');
            $table->string('activities_selection');
            $table->decimal('total')->default(0);
            $table->foreignIdFor(License::class);
            $table->foreignIdFor(Customer::class);
            $table->foreignIdFor(Freezone::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freezone_bookings');
    }
};
