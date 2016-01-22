<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassifiedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classifieds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('issue_id')->unsigned();
//            $table->foreign('issue_id')->references('id')->on('issues');
            $table->integer('classified_section_id')->unsigned();
//            $table->foreign('classified_section_id')->references('id')->on('classified_sections');
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
        Schema::drop('classifieds');
    }
}
