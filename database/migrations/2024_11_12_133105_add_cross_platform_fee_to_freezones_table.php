<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCrossPlatformFeeToFreezonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('freezones', function (Blueprint $table) {
            $table->decimal('cross_platform_fee', 10, 2)->default(0)->after('status');
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
            $table->dropColumn('cross_platform_fee');
        });
    }
}
