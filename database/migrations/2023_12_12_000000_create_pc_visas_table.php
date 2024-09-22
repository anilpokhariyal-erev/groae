<?php

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
        Schema::create('pc_visas', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('visa_type');
            $table->integer('validity');
            $table->string('validity_type')->default('yearly');
            $table->decimal('cost')->default(0);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('pc_license');
    }
};
