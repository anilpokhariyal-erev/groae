<?php

use App\Models\Freezone;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('office');
            $table->string('name');
            $table->string('description')->nullable();
            $table->decimal('price')->default(0);
            $table->boolean('status')->default(1);
            $table->integer('visa_package')->comment('no of package');
            $table->integer('license_validity')->comment('in years');
            $table->foreignIdFor(Freezone::class);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
