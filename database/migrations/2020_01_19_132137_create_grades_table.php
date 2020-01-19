<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student');
            $table->string('school_year_start');
            $table->string('school_year_end');
            $table->integer('grade');
            $table->integer('section');
            $table->unsignedBigInteger('adviser');
            $table->timestamps();

            $table->foreign('student')->references('id')->on('users');
            $table->foreign('adviser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
