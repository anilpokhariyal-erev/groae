<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id'); // Foreign key for package
            $table->unsignedBigInteger('activity_id'); // Foreign key for activity
            $table->decimal('price', 10, 2)->default(0); // Price field with default value 0
            $table->boolean('status')->default(1); // Status field (active by default)
            $table->timestamps(); // created_at and updated_at fields

            // Foreign key constraints (you can modify if needed)
            $table->foreign('package_id')->references('id')->on('package_headers')->onDelete('cascade');
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_activities');
    }
}
