<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_history', function (Blueprint $table) {
            $table->bigIncrements('pay_his_id');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')
                ->references('id')
                ->on('users');
            $table->bigInteger('bank_acc_id')->unsigned();
            $table->foreign('bank_acc_id')
                ->references('bank_acc_id')
                ->on('bank_acc');
            $table->decimal('amount', 10, 2);
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
        Schema::dropIfExists('artist_payment_history');
    }
}
