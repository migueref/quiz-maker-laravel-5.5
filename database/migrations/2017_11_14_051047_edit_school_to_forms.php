<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditSchoolToForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('forms', function (Blueprint $table) {
         $table->integer('institution_id')->nullable()->unsigned();
         $table->foreign('institution_id')->references('id')->on('institutions');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('forms', function (Blueprint $table) {
             $table->dropForeign('forms_institution_id_foreign');
             $table->dropColumn('institution_id');
         });

    }
}
