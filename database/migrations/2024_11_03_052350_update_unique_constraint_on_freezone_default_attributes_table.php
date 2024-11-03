<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUniqueConstraintOnFreezoneDefaultAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('freezone_default_attributes', function (Blueprint $table) {
            // Drop foreign keys if they depend on the unique index
            $table->dropForeign(['freezone_id']);
            $table->dropForeign(['attribute_id']);
            $table->dropForeign(['attribute_option_id']);

            // Drop the old unique index
            $table->dropUnique('freezone_default_attributes_freezone_id_attribute_id_unique');

            // Create the new unique index with attribute_option_id included
            $table->unique(['freezone_id', 'attribute_id', 'attribute_option_id'], 'freezone_default_attributes_unique');

            // Re-add the foreign key constraints
            $table->foreign('freezone_id')->references('id')->on('freezones')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('attribute_option_id')->references('id')->on('attribute_options')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('freezone_default_attributes', function (Blueprint $table) {
            // Drop the new unique index
            $table->dropUnique('freezone_default_attributes_unique');

            // Re-create the old unique index
            $table->unique(['freezone_id', 'attribute_id'], 'freezone_default_attributes_freezone_id_attribute_id_unique');

            // Drop and re-add the foreign keys as before
            $table->dropForeign(['freezone_id']);
            $table->dropForeign(['attribute_id']);
            $table->dropForeign(['attribute_option_id']);
            
            // Re-add original foreign keys
            $table->foreign('freezone_id')->references('id')->on('freezones')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('attribute_option_id')->references('id')->on('attribute_options')->onDelete('cascade');
        });
    }
}
