<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            // Rename the freezone_booking_id column to package_booking_id
            $table->renameColumn('freezone_booking_id', 'package_booking_id');

            // Add the response_obj column as nullable
            $table->text('response_obj')->nullable()->after('payment_status');

            // Add foreign key constraints
            $table->foreign('package_booking_id')
                ->references('id')
                ->on('package_bookings')
                ->onDelete('set null');

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers')
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
        Schema::table('transactions', function (Blueprint $table) {
            // Drop foreign key constraints
            $table->dropForeign(['package_booking_id']);
            $table->dropForeign(['customer_id']);

            // Rename package_booking_id back to freezone_booking_id
            $table->renameColumn('package_booking_id', 'freezone_booking_id');

            // Drop the response_obj column
            $table->dropColumn('response_obj');
        });
    }
}
