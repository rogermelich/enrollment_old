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
            $table->integer('enrollment_id')->unsigned();
            $table->integer('module_id')->unsigned()->nullable();
            $table->integer('study_submodule_id')->unsigned()->nullable();
            $table->string('state')->nullable();
            $table->timestamps();
            $table->index(['enrollment_id', 'module_id','submodule_id']);
            $table->foreign('enrollment_id')->references('id')->on('enrollments');
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('study_submodule_id')->references('id')->on('submodules');

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
