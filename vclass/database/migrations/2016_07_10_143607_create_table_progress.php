<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProgress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status', array('in progress', 'completed'))->default('in progress');
            $table->integer('lesson_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->foreign('lesson_id')->references('id')->on('lesson');
            $table->foreign('student_id')->references('id')->on('student');
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
        Schema::drop('progress');
    }
}
