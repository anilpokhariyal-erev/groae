<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShowInSummaryToPackageHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_headers', function (Blueprint $table) {
            $table->string('show_in_summary', 255)->nullable()->after('show_on_calculator');
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
            $table->dropColumn('show_in_summary');
        });
    }
}
