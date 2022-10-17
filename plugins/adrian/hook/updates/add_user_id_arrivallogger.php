<?php namespace Adrian\Hook\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddUserId extends Migration
{
    public function up()
    {
        Schema::table('adrian_arrivallogger_arrivalloggers', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id', 'user_foreign')->references('id')->on('users');
        });
    }

    public function down()
    {
    }
}
