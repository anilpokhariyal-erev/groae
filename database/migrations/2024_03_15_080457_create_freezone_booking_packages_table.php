<?php

use App\Models\FreezoneBooking;
use App\Models\Location;
use App\Models\VisaAddOn;
use App\Models\VisaType;
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
        Schema::create('freezone_booking_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price')->default(0);
            $table->foreignIdFor(VisaType::class);
            $table->foreignIdFor(VisaAddOn::class);
            $table->foreignIdFor(Location::class);
            $table->foreignIdFor(FreezoneBooking::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freezone_booking_packages');
    }
};
