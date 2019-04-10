<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLdeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ldeductions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); //create in db
            $table->integer('lsubscription_id');
            $table->decimal('amount_deducted',12,3);
            $table->date('entry_month');
            $table->integer('uploaded_by');
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
        Schema::dropIfExists('ldeductions');
    }
}
