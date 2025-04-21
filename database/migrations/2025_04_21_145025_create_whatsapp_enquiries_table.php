<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('whatsapp_enquiries', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->json('request_data');
            $table->string('user_name')->nullable();
            $table->string('user_phone')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('whatsapp_enquiries');
    }
};
