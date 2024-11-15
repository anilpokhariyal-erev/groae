<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePackageBookingDetailsDefaults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_booking_details', function (Blueprint $table) {
            $table->text('attribute_name')->nullable()->default(null)->change();
            $table->text('attribute_value')->nullable()->default(null)->change();
            $table->integer('quantity')->default(1)->change();
            $table->decimal('price_per_unit', 10, 2)->default(0)->change();
            $table->decimal('total_cost', 10, 2)->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('package_booking_details', function (Blueprint $table) {
            $table->text('attribute_name')->nullable(false)->default('')->change();
            $table->text('attribute_value')->nullable(false)->default('')->change();
            $table->integer('quantity')->default(null)->change();
            $table->decimal('price_per_unit', 10, 2)->default(null)->change();
            $table->decimal('total_cost', 10, 2)->default(null)->change();
        });
    }
}
