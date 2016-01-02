<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('organization_courses');
        Schema::create('organization_courses', function(Blueprint $table){
            $table->increments('id');
            $table->integer('organizationId')->unsigned();
            $table->foreign('organizationId')->references('id')->on('organization_profiles');
            $table->integer('courseId')->unsigned();
            $table->foreign('courseId')->references('id')->on('courses');
            $table->integer('min_cost');
            $table->integer('max_cost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('organization_courses');
    }
}
