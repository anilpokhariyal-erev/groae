<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixedFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed_fees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('freezone_id');
            $table->string('type');
            $table->decimal('value', 10, 2);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraint
            $table->foreign('freezone_id')->references('id')->on('freezones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixed_fees');
    }
}
