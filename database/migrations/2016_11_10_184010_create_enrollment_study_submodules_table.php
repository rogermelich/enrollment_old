<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentStudySubmodulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_study_submodules', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->increments('enrollment_id');
            $table->increments('study_submodule_id');
        });

        Schema::table('enrollments', function ($table) {
            $table->foreign('enrollment_id')->references('id')->on('enrollments');
        });

        Schema::table('study_submodules', function ($table) {
            $table->foreign('study_submodule_id')->references('id')->on('study_submodules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollment_study_submodules');
    }
}
