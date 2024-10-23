<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaPackageAttributeHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_package_attribute_header', function (Blueprint $table) {
            $table->id(); // auto-incrementing primary key
            $table->string('name'); 
            $table->string('title'); 
            $table->tinyInteger('status')->default(1); // status field, default is 1 (active)
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visa_package_attribute_header');
    }
}
