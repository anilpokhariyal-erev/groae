<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities', function (Blueprint $table) {
            // Adding foreign key constraints
            $table->foreign('activity_group_id')
                  ->references('id')
                  ->on('activity_groups')
                  ->onDelete('cascade');

            $table->foreign('freezone_id')
                  ->references('id')
                  ->on('freezones')
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
        Schema::table('activities', function (Blueprint $table) {
            // Dropping foreign key constraints
            $table->dropForeign(['activity_group_id']);
            $table->dropForeign(['freezone_id']);
        });
    }
}
