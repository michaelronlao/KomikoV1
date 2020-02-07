<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeCountTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_count', function (Blueprint $table) {
            $table->bigIncrements('like_count_id');
            $table->bigInteger('comic_id')->unsigned();
            $table->foreign('comic_id')
                ->references('comic_id')
                ->on('comic_list');
            $table->integer('like_num');
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
        Schema::dropIfExists('like_count');
    }
}
