<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateComicTitleTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_title', function (Blueprint $table) {
            $table->bigIncrements('comic_title_id');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')
                ->references('id')
                ->on('users');
            $table->string('title_name');
            $table->date('date_create');
            $table->timestamps();
        });

        //Column for image
        DB::statement('ALTER TABLE comic_title ADD comic_title_image MEDIUMBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_title');
    }
}
