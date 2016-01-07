<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('resources',function(Blueprint $table){
            $table->increments('id');
            $table->string('description');
            $table->integer('teacherId')->unsigned();
            $table->foreign('teacherId')->references('id')->on('users');
            $table->integer('resource_typeId')->unsigned();
            $table->foreign('resource_typeId')->references('id')->on('resource_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resources');
    }
}
