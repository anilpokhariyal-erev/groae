<?php

use App\Models\PcVisa;
use App\Models\PcVisaAttribute;
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
        Schema::create('visa_attribute_linking', function (Blueprint $table) {
            $table->foreignIdFor(PcVisa::class);
            $table->foreignIdFor(PcVisaAttribute::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_additional_linking');
    }
};
