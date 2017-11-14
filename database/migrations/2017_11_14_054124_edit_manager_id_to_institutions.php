<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditManagerIdToInstitutions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('institutions', function (Blueprint $table) {
            $table->integer('manager_id')->unsigned();
            $table->foreign('manager_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('institutions', function (Blueprint $table) {
              $table->dropForeign('institutions_manager_id_foreign');
             $table->dropColumn('manager_id');
       });
    }
}
