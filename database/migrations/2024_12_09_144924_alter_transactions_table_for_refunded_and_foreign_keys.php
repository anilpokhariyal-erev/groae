<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTransactionsTableForRefundedAndForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            // Modify payment_status enum to include 'refunded'
            $table->enum('payment_status', ['successful', 'failed', 'pending', 'cancelled', 'refunded'])->default('pending')->change();

            // Add foreign key for customer_id
            $table->foreign('customer_id')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade');

            // Add foreign key for package_booking_id
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
        Schema::table('transactions', function (Blueprint $table) {
            // Drop foreign keys
            $table->dropForeign(['customer_id']);
            $table->dropForeign(['package_booking_id']);

            // Revert payment_status enum to its original state
            $table->enum('payment_status', ['successful', 'failed', 'pending', 'cancelled'])->default('pending')->change();
        });
    }
}
