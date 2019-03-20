<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavingreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savingreviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->decimal('prev_amount',8,2);
            $table->decimal('current_amount',8,2);
            $table->string('status')->default('Pending');
            $table->integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('savingreviews');
    }
}
