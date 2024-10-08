<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAllowAnyToAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attributes', function (Blueprint $table) {
            // Adding the 'allow_any' column after the 'status' column
            $table->boolean('allow_any')->default(false)->after('status')->comment("Allow search in ai for Any option");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attributes', function (Blueprint $table) {
            // Dropping the 'allow_any' column if we roll back the migration
            $table->dropColumn('allow_any');
        });
    }
}
