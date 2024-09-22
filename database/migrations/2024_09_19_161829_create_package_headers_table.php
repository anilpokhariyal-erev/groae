<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageHeadersTable extends Migration
{
    public function up()
    {
        Schema::create('package_headers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('freezone_id');
            $table->decimal('price', 10, 2);
            $table->decimal('renewable_price', 10, 2)->nullable();
            $table->string('currency', 10);
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('updated_by')->nullable();

            // Foreign key constraint
            $table->foreign('freezone_id')->references('id')->on('freezones')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('package_headers');
    }
}
