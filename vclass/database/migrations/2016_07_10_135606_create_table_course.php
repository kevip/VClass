<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('code');
            $table->text('image');
            $table->enum('status', array('active', 'closed'))->default('active');
            $table->integer('teacher_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teacher');
            //$table->foreign('category_id')->references('id')->on('category');
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
        Schema::drop('course');
    }
}
