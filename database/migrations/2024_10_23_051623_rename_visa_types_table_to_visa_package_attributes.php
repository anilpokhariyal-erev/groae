<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class RenameVisaTypesTableToVisaPackageAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Truncate the 'visa_types' table before renaming it
        DB::table('visa_types')->truncate();

        // Rename visa_types table to visa_package_attributes
        Schema::rename('visa_types', 'visa_package_attributes');

        // Update the table schema
        Schema::table('visa_package_attributes', function (Blueprint $table) {
            // Remove the 'name' column
            $table->dropColumn('name');
            
            // Add 'attribute_header_id' foreign key to 'visa_package_attribute_header'
            $table->unsignedBigInteger('attribute_header_id')->after('id');
            
            // Add 'value' column as VARCHAR(50) after 'attribute_header_id'
            $table->string('value', 50)->after('attribute_header_id');

            // Add the foreign key constraint
            $table->foreign('attribute_header_id')
                  ->references('id')
                  ->on('visa_package_attribute_header')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Truncate the 'visa_package_attributes' table before renaming it back
        DB::table('visa_package_attributes')->truncate();

        Schema::table('visa_package_attributes', function (Blueprint $table) {
            // Rollback the changes by adding 'name' back and dropping 'attribute_header_id'
            $table->string('name', 255)->after('id');
            $table->dropForeign(['attribute_header_id']);
            $table->dropColumn('attribute_header_id');
            
            // Drop the 'value' column
            $table->dropColumn('value');
        });

        // Rename the table back to visa_types
        Schema::rename('visa_package_attributes', 'visa_types');
    }
}
