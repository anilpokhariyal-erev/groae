<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShareholdersToPackageHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_headers', function (Blueprint $table) {
            $table->integer('free_individual_shareholders')->default(0)->after('currency');
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
        Schema::table('package_headers', function (Blueprint $table) {
            $table->dropColumn('free_individual_shareholders');
            $table->dropColumn('free_corporate_shareholders');
        });
    }
}
