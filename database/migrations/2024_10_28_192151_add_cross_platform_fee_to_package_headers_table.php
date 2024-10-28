<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCrossPlatformFeeToPackageHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_headers', function (Blueprint $table) {
            $table->decimal('cross_platform_fee', 10, 2)
                ->after('renewable_price')
                ->nullable()
                ->default(0.00);
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
            $table->dropColumn('cross_platform_fee');
        });
    }
}
