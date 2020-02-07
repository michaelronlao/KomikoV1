<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_payment_request', function (Blueprint $table) {
            $table->bigIncrements('pay_req_id');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')
                ->references('id')
                ->on('users');
            $table->bigInteger('bank_acc_id')->unsigned();
            $table->foreign('bank_acc_id')
                ->references('bank_acc_id')
                ->on('bank_acc');
            $table->decimal('amount', 10, 2);
            $table->string('status');
            $table->date('date_create');
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
        Schema::dropIfExists('artist_payment_request');
    }
}
