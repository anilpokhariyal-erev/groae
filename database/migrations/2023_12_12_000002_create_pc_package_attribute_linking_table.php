<?php

use App\Models\PcPackage;
use App\Models\PcPackageAttribute;
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
        Schema::create('package_attribute_linking', function (Blueprint $table) {
            $table->foreignIdFor(PcPackage::class);
            $table->foreignIdFor(PcPackageAttribute::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_offer_linking');
    }
};
