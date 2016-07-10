<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAccess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', array('closed', 'active'))->default('active');
            $table->integer('membership_id')->unsigned();
            $table->integer('student_id')->unsigned();
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
        Schema::drop('access');
    }
}
