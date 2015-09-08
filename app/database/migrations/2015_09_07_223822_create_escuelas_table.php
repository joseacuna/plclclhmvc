<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEscuelasTable extends Migration {

	public function up()
	{
		Schema::create('escuelas', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->bigInteger('fk_facultad')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('escuelas');
	}
}