<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVisibleInFooterAndParentIdToStaticPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('static_pages', function (Blueprint $table) {
            $table->boolean('visible_in_footer')->default(false)->after('slug'); // Add boolean column
            $table->unsignedBigInteger('parent_id')->nullable()->after('visible_in_footer'); // Add parent_id column (self-referencing foreign key)
            $table->integer('sort')->after('slug')->nullable()->default(0);
            $table->foreign('parent_id')->references('id')->on('static_pages')->onDelete('cascade'); // Set parent_id as a foreign key referencing self
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('static_pages', function (Blueprint $table) {
            $table->dropForeign(['parent_id']); // Drop the foreign key constraint
            $table->dropColumn('visible_in_footer'); // Drop the visible_in_footer column
            $table->dropColumn('parent_id'); // Drop the parent_id column
            $table->dropColumn('sort');
        });
    }
}
