<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodeColumnToActivityGroupsAndActivitiesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activity_groups', function (Blueprint $table) {
            $table->string('code',20)->after('status')->nullable()->unique();
        });

        Schema::table('activities', function (Blueprint $table) {
            $table->string('code',20)->after('status')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activity_groups', function (Blueprint $table) {
            $table->dropColumn('code');
        });

        Schema::table('activities', function (Blueprint $table) {
            $table->dropColumn('code');
        });
    }
}
