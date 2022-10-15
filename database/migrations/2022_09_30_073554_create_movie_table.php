<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_movies', function (Blueprint $table) {
            ///$table->id();
            ///$table->timestamps();
            $table->integer('m_id')->autoIncrement();
            $table->string('m_title', 255);
            $table->date('m_date');
            $table->time('m_time');
            $table->integer('m_cate_id');
            $table->string('m_image_path', 255);
            $table->dateTime('created_at', $precision = 0);
            $table->dateTime('updated_at', $precision = 0);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_movies');
    }
}
