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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('top_track_id')->unsigned();
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
            $table->string('track')->nullable();
            $table->timestamps();
        });
        
        Schema::table('tracks', function($table) {
            $table->foreign('top_track_id')->references('id')->on('top_tracks');
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
