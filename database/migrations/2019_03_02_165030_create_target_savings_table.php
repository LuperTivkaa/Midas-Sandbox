<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target_savings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('created_by'); //ID of the logged in staff
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
        Schema::dropIfExists('target_savings');
    }
}
