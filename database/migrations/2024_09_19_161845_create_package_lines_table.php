<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageLinesTable extends Migration
{
    public function up()
    {
        Schema::create('package_lines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('attribute_id');
            $table->unsignedBigInteger('attribute_option_id');
            $table->decimal('addon_cost', 10, 2)->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraints
            $table->foreign('package_id')->references('id')->on('package_headers')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('attribute_option_id')->references('id')->on('attribute_options')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('package_lines');
    }
}
