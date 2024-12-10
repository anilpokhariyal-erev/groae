<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPackageBookingIdToCustomerDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_downloads', function (Blueprint $table) {
            // Add package_booking_id column after customer_id
            $table->unsignedBigInteger('package_booking_id')->nullable()->after('customer_id');

            // Optional: Add foreign key constraint if needed
            $table->foreign('package_booking_id')
                ->references('id')
                ->on('package_bookings')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_downloads', function (Blueprint $table) {
            // Drop foreign key if it exists
            $table->dropForeign(['package_booking_id']);

            // Drop the package_booking_id column
            $table->dropColumn('package_booking_id');
        });
    }
}
