<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAllowMultipleToAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attributes', function (Blueprint $table) {
            // Add the 'allow_multiple' column after the 'label' column
            $table->boolean('allow_multiple')->default(0)->after('label');
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
            // Drop the 'allow_multiple' column if rolling back the migration
            $table->dropColumn('allow_multiple');
        });
    }
}
