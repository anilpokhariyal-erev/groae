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
            $table->unsignedBigInteger('freezone_id');
            $table->unsignedBigInteger('attribute_id');
            $table->unsignedBigInteger('attribute_option_id');
            $table->integer('allowed_free_qty')->default(0);
            $table->integer('unit_price')->default(0);
            $table->integer('per_unit')->default(1);

            // Setting up the foreign keys
            $table->foreign('freezone_id')->references('id')->on('freezones')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('attribute_option_id')->references('id')->on('attribute_options')->onDelete('cascade');

            // Composite primary key
            $table->primary(['freezone_id', 'attribute_id', 'attribute_option_id']);
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
