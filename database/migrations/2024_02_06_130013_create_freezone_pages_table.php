<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Freezone;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('freezone_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Freezone::class);
            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('file')->nullable();
            $table->string('slug');
            $table->integer('priority')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freezone_pages');
    }
};
