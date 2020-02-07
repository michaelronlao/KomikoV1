<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateComicListTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_list', function (Blueprint $table) {
            $table->bigIncrements('comic_id');
            $table->bigInteger('comic_title_id')->unsigned();
            $table->foreign('comic_title_id')
                ->references('comic_title_id')
                ->on('comic_title');
            $table->integer('comic_num');
            $table->string('comic_name');
            $table->string('comic_desc');
            $table->date('date_create');
            $table->timestamps();
        });

        //Image column
        DB::statement('ALTER TABLE comic_list ADD comic_image LONGBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_list');
    }
}
