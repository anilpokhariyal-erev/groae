<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLicenceIdToActivityGroupsAndActivities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add 'licence_id' to 'activity_groups' table
        Schema::table('activity_groups', function (Blueprint $table) {
            $table->unsignedBigInteger('licence_id')->nullable()->after('freezone_id');
            $table->foreign('licence_id')
                  ->references('id')
                  ->on('licenses')
                  ->onDelete('cascade');
        });

        // Add 'licence_id' to 'activities' table
        Schema::table('activities', function (Blueprint $table) {
            $table->unsignedBigInteger('licence_id')->nullable()->after('freezone_id');
            $table->foreign('licence_id')
                  ->references('id')
                  ->on('licenses')
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
        // Drop 'licence_id' from 'activity_groups' table
        Schema::table('activity_groups', function (Blueprint $table) {
            $table->dropForeign(['licence_id']);
            $table->dropColumn('licence_id');
        });

        // Drop 'licence_id' from 'activities' table
        Schema::table('activities', function (Blueprint $table) {
            $table->dropForeign(['licence_id']);
            $table->dropColumn('licence_id');
        });
    }
}

