<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_option', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('question_id')->unsigned();
             $table->integer('option_id')->unsigned();
             $table->timestamps();
             $table->softDeletes();
             $table->foreign('question_id')->references('id')->on('questions');
             $table->foreign('option_id')->references('id')->on('options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_option');
    }
}
