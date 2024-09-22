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
        Schema::create('pc_package_attributes', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name');
            $table->decimal('price')->default(0);
            $table->boolean('status')->default(1);
            $table->integer('validity')->nullable();
            $table->string('type');
            $table->string('description')->nullable();
            $table->string('validity_type')->default('yearly');
            $table->integer('min_visa')->nullable();
            $table->integer('max_visa')->nullable();
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
