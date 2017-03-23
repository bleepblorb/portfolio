<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortraitTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // create face table
      Schema::create('portrait_faces', function (Blueprint $table) {
        $table->increments('id');
        $table->text('expression');
        $table->text('filename');
      });

      // create beard table
      Schema::create('portrait_beards', function (Blueprint $table) {
        $table->increments('id');
        $table->text('style');
        $table->text('expression');
        $table->text('filename');
      });

      // create attire table
      Schema::create('portrait_attire', function (Blueprint $table) {
        $table->increments('id');
        $table->text('style');
        $table->text('hair');
        $table->text('filename');
      });

      // create hands table
      Schema::create('portrait_hands', function (Blueprint $table) {
        $table->increments('id');
        $table->text('hand');
        $table->text('attire');
        $table->text('position');
        $table->text('filename');
      });

      // create background table
      Schema::create('portrait_backgrounds', function (Blueprint $table) {
        $table->increments('id');
        $table->text('name');
        $table->text('filename');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('portrait_faces');
        Schema::drop('portrait_beards');
        Schema::drop('portrait_attire');
        Schema::drop('portrait_hands');
        Schema::drop('portrait_backgrounds');
    }
}
