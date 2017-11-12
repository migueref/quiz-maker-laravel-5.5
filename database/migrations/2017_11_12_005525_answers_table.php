<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('question_id')->unsigned();
             $table->integer('option_id')->unsigned();
             $table->integer('form_id')->unsigned();
             $table->string('description');
             $table->timestamps();
             $table->softDeletes();
             $table->foreign('question_id')->references('id')->on('questions');
             $table->foreign('option_id')->references('id')->on('options');
             $table->foreign('form_id')->references('id')->on('forms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
