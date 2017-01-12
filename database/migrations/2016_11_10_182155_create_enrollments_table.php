<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('study_id')->unsigned()->nullable();
            $table->integer('course_id')->unsigned()->nullable();
            $table->integer('classroom_id')->unsigned()->nullable();
            $table->string('state')->nullable();
            $table->timestamps();
            $table->index(['user_id', 'study_id','course_id','classroom_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('study_id')->references('id')->on('studies');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
