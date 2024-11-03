<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMaxAllowedQtyToPackageAttributesCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_attributes_cost', function (Blueprint $table) {
            $table->integer('max_allowed_qty')->after('per_unit')->default(0);
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
            $table->dropColumn('max_allowed_qty');
        });
    }
}
