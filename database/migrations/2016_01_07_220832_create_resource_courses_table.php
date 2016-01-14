<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_courses',function(Blueprint $table){
            $table->increments('id');
            $table->integer('resourceId')->unsigned();
            $table->foreign('resourceId')->references('id')->on('resources');
            $table->integer('courseId')->unsigned();
            $table->foreign('courseId')->references('id')->on('courses');
            $table->integer('semesters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resource_courses');
    }
}
