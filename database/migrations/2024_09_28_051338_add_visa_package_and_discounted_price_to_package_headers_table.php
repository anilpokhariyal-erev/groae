<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVisaPackageAndDiscountedPriceToPackageHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_headers', function (Blueprint $table) {
            $table->integer('visa_package')->after('trending')->nullable();
            $table->integer('allowed_free_packages')->after('visa_package')->nullable()->comment("How many free activities allowed on the package.");
            $table->decimal('discounted_price', 10, 2)->after('renewable_price')->nullable();
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
            $table->dropColumn(['visa_package', 'allowed_free_packages', 'discounted_price']);
        });
    }
}
