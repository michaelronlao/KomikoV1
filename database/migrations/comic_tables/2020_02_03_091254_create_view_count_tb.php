<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewCountTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_count', function (Blueprint $table) {
            $table->bigIncrements('view_id');
            $table->bigInteger('comic_id')->unsigned();
            $table->foreign('comic_id')
                ->references('comic_id')
                ->on('comic_list');
            $table->integer('view_num');
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
        Schema::dropIfExists('view_count');
    }
}
