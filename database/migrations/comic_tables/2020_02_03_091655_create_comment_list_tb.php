<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentListTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_list', function (Blueprint $table) {
            $table->bigIncrements('comment_id');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')
                ->references('id')
                ->on('users');
            $table->bigInteger('comic_id')->unsigned();
            $table->foreign('comic_id')
                ->references('comic_id')
                ->on('comic_list');
            $table->string('comment_desc');
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
        Schema::dropIfExists('comment_list');
    }
}
