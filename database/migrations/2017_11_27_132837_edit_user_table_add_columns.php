<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUserTableAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',
                      function (Blueprint $table) {
            $table->integer('role_id')->after('password');
            $table->integer('statuses_user_id')->after('role_id')->comment('связка с таблицей statuses_user');
            $table->dateTime('last_enter_date')->nullable()->comment('дата входа');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('users',
                      function (Blueprint $table) {
            $table->dropColumn('role_id');
            $table->dropColumn('statuses_user_id');
            $table->dropColumn('last_enter_date');
        });
    }
}
