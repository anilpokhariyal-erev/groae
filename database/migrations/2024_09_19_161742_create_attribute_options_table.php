<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('attribute_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attribute_id');
            $table->string('value');
            $table->boolean('status')->default(1);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('attribute_options');
    }
}
