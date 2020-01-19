<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student');
            $table->unsignedBigInteger('grade_id');
            $table->text('1st_quarter')->nullable();
            $table->text('2nd_quarter')->nullable();
            $table->text('3rd_quarter')->nullable();
            $table->text('4th_quarter')->nullable();
            $table->text('final_grade')->nullable();
            $table->integer('general_average')->nullable();
            $table->timestamps();

            $table->foreign('student')->references('id')->on('users');
            $table->foreign('grade_id')->references('id')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_cards');
    }
}
