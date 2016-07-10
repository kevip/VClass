<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSending extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sending_file');
            $table->date('sending_date');
            $table->integer('lesson_id')->unsigned();
            $table->integer('task_id')->unsigned();
            $table->foreign('lesson_id')->references('id')->on('lesson');
            $table->foreign('task_id')->references('id')->on('task');
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
        Schema::drop('sending');
    }
}
