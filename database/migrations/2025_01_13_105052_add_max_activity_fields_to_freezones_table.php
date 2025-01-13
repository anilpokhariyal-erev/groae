<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMaxActivityFieldsToFreezonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('freezones', function (Blueprint $table) {
            $table->integer('max_activity_group_allowed')->default(1)->after('min_package_id');
            $table->integer('max_activity_allowed')->default(1)->after('max_activity_group_allowed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('freezones', function (Blueprint $table) {
            $table->dropColumn(['max_activity_group_allowed', 'max_activity_allowed']);
        });
    }
}
