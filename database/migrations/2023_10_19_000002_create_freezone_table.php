<?php

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
        Schema::create('freezones', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->text('about')->nullable();
            $table->text('benefits')->nullable();
            $table->text('licence_registration_procedures_info')->nullable();
            $table->string('licence_registration_procedures_logo')->nullable();
            $table->string('licence_registration_procedures_video_link')->nullable();
            $table->string('rule_regulation_type')->nullable();
            $table->text('rule_regulation_info')->nullable();
            $table->string('rule_regulation_logo')->nullable();
            $table->integer('freezone_views_count')->default(0);
            $table->string('registration_information')->nullable();
            $table->string('business_registration_image')->nullable();
            $table->string('business_registration_youtube_link')->nullable();
            $table->longText('price_calculator_comment')->nullable();
            $table->string('slug')->uniqid();
            $table->boolean('status')->default(0);
            $table->decimal('min_price')->default(0);
            $table->foreignId('min_package_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freezones');
    }
};
