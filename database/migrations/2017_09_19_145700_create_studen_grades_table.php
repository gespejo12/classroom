<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudenGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_grades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_code')->nullable();
            $table->string('student_id')->nullable();
            $table->string('prelim_quiz_grade')->nullable();
            $table->string('prelim_exam_grade')->nullable();
            $table->string('prelim_final_grade')->nullable();
            $table->string('midterm_quiz_grade')->nullable();
            $table->string('midterm_exam_grade')->nullable();
            $table->string('midterm_final_grade')->nullable();
            $table->string('finals_quiz_grade')->nullable();
            $table->string('finals_exam_grade')->nullable();
            $table->string('finals_final_grade')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('student_grades');
    }
}
