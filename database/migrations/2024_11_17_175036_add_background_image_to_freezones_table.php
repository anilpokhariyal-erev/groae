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
        Schema::table('freezones', function (Blueprint $table) {
            $table->string('background_image')->nullable()->after('logo'); // Add the background_image column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('freezones', function (Blueprint $table) {
            $table->dropColumn('background_image'); // Remove the column if rolling back
        });
    }
};
