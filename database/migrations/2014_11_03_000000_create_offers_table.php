<?php
use App\Models\Freezone;
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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('discount')->nullable();
            $table->string('image');
            $table->integer('priority')->default(0);
            $table->foreignIdFor(Freezone::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
