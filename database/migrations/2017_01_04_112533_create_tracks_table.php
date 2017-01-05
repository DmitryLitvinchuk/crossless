<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('top100');
            $table->integer('number');
            $table->string('title');
            $table->string('remixer');
            $table->string('label');
            $table->string('artist');
            $table->string('genre');
            $table->integer('bpm');
            $table->string('key');
            $table->string('cover');
            $table->date('release');
            $table->string('preview');
            //$table->string('track');
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
        Schema::dropIfExists('tracks');
    }
}
