<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create(
                'content', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('url')->nullable();
            $table->unsignedInteger('category_id')->comment('id категории')->nullable();
            $table->text('body')->comment('текст статьи');
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content');
    }
}
