<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreezoneDefaultAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freezone_default_attributes', function (Blueprint $table) {
            // Add an auto-incrementing primary key 'id'
            $table->id();

            // Other fields
            $table->unsignedBigInteger('freezone_id');
            $table->unsignedBigInteger('attribute_id');
            $table->unsignedBigInteger('attribute_option_id')->nullable(); // Make this nullable
            $table->integer('allowed_free_qty')->default(0)->nullable();
            $table->integer('unit_price')->default(0)->nullable();
            $table->integer('per_unit')->default(1)->nullable();

            // Status field
            $table->tinyInteger('status')->default(1); // 1 for active, 0 for inactive

            // Timestamps for created_at and updated_at
            $table->timestamps();

            // Soft deletes for deleted_at
            $table->softDeletes();

            // Foreign keys
            $table->foreign('freezone_id')->references('id')->on('freezones')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('attribute_option_id')->references('id')->on('attribute_options')->onDelete('cascade')->nullable();

            // You can add a unique index on the combination of freezone_id and attribute_id if needed
            $table->unique(['freezone_id', 'attribute_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('freezone_default_attributes');
    }
}
