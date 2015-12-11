<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('courses');
        Schema::create('courses', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('streamId')->unsigned();
            $table->foreign('streamId')->references('id')->on('streams');
            $table->integer('levelId')->unsigned();
            $table->foreign('levelId')->references('id')->on('levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courses');
    }
}