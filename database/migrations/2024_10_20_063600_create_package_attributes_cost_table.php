<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageAttributesCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_attributes_cost', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('attribute_id');
            $table->integer('allowed_free_qty')->default(0);
            $table->integer('unit_price')->default(1);
            $table->integer('per_unit')->default(1); // Default value of 1 for per_unit

            // Foreign keys
            $table->foreign('package_id')->references('id')->on('package_headers')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');

            // Timestamps for created_at and updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_attributes_cost');
    }
}
