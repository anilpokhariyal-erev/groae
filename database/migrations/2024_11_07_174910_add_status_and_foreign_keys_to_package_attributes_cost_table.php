<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAndForeignKeysToPackageAttributesCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_attributes_cost', function (Blueprint $table) {
            // Add the new column
            $table->tinyInteger('status')->default(1)->after('max_allowed_qty');

            // Add foreign keys
            $table->foreign('package_id')->references('id')->on('package_headers')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('package_attributes_cost', function (Blueprint $table) {
            // Drop the foreign keys and the status column
            $table->dropForeign(['package_id']);
            $table->dropForeign(['attribute_id']);
            $table->dropColumn('status');
        });
    }
}
