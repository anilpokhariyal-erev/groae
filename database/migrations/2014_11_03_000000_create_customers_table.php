<?php

use App\Models\State;
use App\Models\Country;
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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('type');
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->foreignIdFor(State::class)->nullable();
            $table->foreignIdFor(Country::class)->nullable();
            $table->string('pincode')->nullable();
            $table->boolean('uae_residence')->default(0);
            $table->string('mobile_number')->nullable()->unique();
            $table->string('proof_document')->nullable();
            $table->boolean('status')->default(1);
            $table->string('iso2')->nullable();
            $table->string('dialCode')->nullable();
            $table->date('dob')->nullable();
            $table->string('business_interested')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
