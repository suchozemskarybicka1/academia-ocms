<?php namespace Adrian\Arrivallogger\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArrivalloggersTable extends Migration
{
    public function up()
    {
        Schema::create('adrian_arrivallogger_arrivalloggers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->boolean('late');
        });
    }

    public function down()
    {
        Schema::dropIfExists('adrian_arrivallogger_arrivalloggers');
    }
}
