<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('nationality');
            $table->integer('student_address_id')->unsigned();
            $table->integer('course_id')->unsigned();

            $table->foreign('student_address_id')->references('id')->on('student_addresses');
            $table->foreign('course_id')->references('id')->on('courses');
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
        Schema::dropIfExists('students');
    }
}
