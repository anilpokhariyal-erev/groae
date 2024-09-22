<?php

use App\Models\Customer;
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
        Schema::create('process_documents', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('request_type');
            $table->string('license_type')->nullable();
            $table->integer('no_of_visa_required')->nullable();
            $table->integer('no_of_shareholder')->nullable();
            $table->string('document_type')->nullable();
            $table->string('document_name')->nullable();
            $table->string('document_format')->nullable();
            $table->json('document_format_type')->nullable();
            $table->json('additional_detail')->nullable();
            $table->foreignIdFor(Customer::class)->nullable();
            $table->foreignIdFor(Freezone::class)->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('process_documents');
    }
};
