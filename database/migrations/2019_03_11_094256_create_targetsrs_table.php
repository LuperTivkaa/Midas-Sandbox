<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetsrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('targetsrs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('target_savings_id');
            $table->decimal('monthly_savings',9,2)->nullable();
            $table->string('_status')->default('Active');
            $table->date('review_date');
            $table->mediumText('review_comment')->nullable();
            $table->integer('review_by'); //ID of the logged in staff
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
        Schema::dropIfExists('targetsrs');
    }
}
