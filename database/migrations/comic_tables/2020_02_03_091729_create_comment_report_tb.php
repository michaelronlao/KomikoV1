<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentReportTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_report', function (Blueprint $table) {
            $table->bigIncrements('comment_report_id');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')
                ->references('id')
                ->on('users');
            $table->bigInteger('comment_id')->unsigned();
            $table->foreign('comment_id')
                ->references('comment_id')
                ->on('comment_list');
            $table->string('comment_report_desc');
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
        Schema::dropIfExists('comment_report');
    }
}
