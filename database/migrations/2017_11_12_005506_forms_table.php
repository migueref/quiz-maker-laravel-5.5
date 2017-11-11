<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('applicant_id')->unsigned();
             $table->integer('exam_id')->unsigned();
             $table->timestamps();
             $table->softDeletes();
             $table->foreign('applicant_id')->references('id')->on('applicants');
             $table->foreign('exam_id')->references('id')->on('exams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
