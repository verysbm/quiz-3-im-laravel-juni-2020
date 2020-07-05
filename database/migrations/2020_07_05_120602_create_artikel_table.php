<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id_artikel');
            $table->string('judul');
            $table->string('isi');
            $table->string('slug');
            $table->string('tag');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('tb_user');
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



        Schema::dropIfExists('artikel');
        // Schema::drop('artikel');
        // Schema::drop('tb_user');
    }
}
