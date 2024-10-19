<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShareholdersToFreezonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('freezones', function (Blueprint $table) {
            $table->integer('free_individual_shareholders')->default(0)->after('price_calculator_comment');
            $table->integer('free_corporate_shareholders')->default(0)->after('free_individual_shareholders');
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
            $table->dropColumn('free_individual_shareholders');
            $table->dropColumn('free_corporate_shareholders');
        });
    }
}
