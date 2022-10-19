<?php namespace Adrian\Hook\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateHooksTable extends Migration
{
    public function up()
    {
        Schema::table('adrian_arrivallogger_arrivalloggers', function (Blueprint $table) {
            $table->text('desc')->nullable();
            $table->text('skills')->nullable();
        });
    }

    public function down()
    {
    }

}
