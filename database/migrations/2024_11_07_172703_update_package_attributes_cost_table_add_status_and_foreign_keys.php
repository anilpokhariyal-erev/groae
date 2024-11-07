<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class AddStatusColumnAndForeignKeysToPackageAttributesCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_attributes_cost', function (Blueprint $table) {
            // Add new status column after max_allowed_qty with default value 1
            $table->tinyInteger('status')->default(1)->after('max_allowed_qty');

            // Add foreign key constraints
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
            // Drop the foreign keys
            $table->dropForeign(['package_id']);
            $table->dropForeign(['attribute_id']);

            // Drop the status column
            $table->dropColumn('status');
        });
    }
}
