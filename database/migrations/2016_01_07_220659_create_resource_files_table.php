<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_files',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('order');
            $table->string('file');
            $table->integer('resourceId')->unsigned();
            $table->foreign('resourceId')->references('id')->on('resources');
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
        Schema::drop('resource_files');
    }
}
