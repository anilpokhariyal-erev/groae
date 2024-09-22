<?php

use App\Models\Freezone;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->string('mobile_number')->nullable();
            $table->string('user_type')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('unique_id')->nullable();
            $table->boolean('status')->default(1);
            $table->foreignIdFor(Freezone::class)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('mobile_number');
        });
    }
};
