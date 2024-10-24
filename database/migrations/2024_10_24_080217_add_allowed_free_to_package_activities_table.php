<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('package_activities', function (Blueprint $table) {
            $table->boolean('allowed_free')->default(false)->after('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('package_activities', function (Blueprint $table) {
            $table->dropColumn('allowed_free');
        });
    }
};
