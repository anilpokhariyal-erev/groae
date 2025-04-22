<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalCommentToCustomerDocumentsTable extends Migration
{
    public function up()
    {
        Schema::table('customer_documents', function (Blueprint $table) {
            $table->text('additional_comment')->nullable()->after('status');
        });
    }

    public function down()
    {
        Schema::table('customer_documents', function (Blueprint $table) {
            $table->dropColumn('additional_comment');
        });
    }
}
