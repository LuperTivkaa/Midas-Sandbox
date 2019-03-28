<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLsubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lsubscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->integer('user_id');
            $table->integer('custom_tenor')->nullable();
            $table->decimal('amount_applied',12,3);
            $table->decimal('amount_approved',12,3)->nullable();
            $table->decimal('monthly_deduction',12,3)->nullable();
            $table->string('loan_status')->default('Pending');
            $table->date('loan_start_date')->nullable();
            $table->date('loan_end_date')->nullable();
            $table->mediumText('review_comment')->nullable();
            $table->integer('created_by'); //ID of the logged in staff
            $table->integer('review_by')->nullable(); //ID of the logged in staff that reviewed loan
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
        Schema::dropIfExists('lsubscriptions');
    }
}
