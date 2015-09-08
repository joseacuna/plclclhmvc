<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarrerasTable extends Migration {

	public function up()
	{
		Schema::create('carreras', function(Blueprint $table) {
			$table->increments('id');
			$table->string('codigo', 8);
			$table->string('nombre');
			$table->bigInteger('fk_escuela')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('carreras');
	}
}