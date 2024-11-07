<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUniqueKeyInActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities', function (Blueprint $table) {
            // Remove the existing unique constraint on the 'code' column if it exists
            $table->dropUnique(['code']);

            // Add a new unique constraint on 'code' and 'freezone_id' columns
            $table->unique(['code', 'freezone_id'], 'unique_code_freezone');
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
            // Remove the unique constraint on 'code' and 'freezone_id'
            $table->dropUnique('unique_code_freezone');

            // Restore the original unique constraint on the 'code' column
            $table->unique('code');
        });
    }
}
