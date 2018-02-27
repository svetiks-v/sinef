<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses_user', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 250);
            $table->timestamps();
        });
		
		DB::table('statuses_user')->insert(
            [
				['id' => 1, 'name'=>'активный'],
				['id' => 2, 'name'=>'неподтвержденный'],
				['id' => 3, 'name'=>'заблокирован']

			]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('statuses_user');
    }
}
