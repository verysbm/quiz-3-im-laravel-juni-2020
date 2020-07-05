<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengikutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengikut', function (Blueprint $table) {
            $table->increments('id_pengikut');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('tb_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengikut');
        // Schema::drop('pengikut');
        // Schema::drop('tb_user');
    }
}
