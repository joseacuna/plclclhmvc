<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartamentosTable extends Migration {

	public function up()
	{
		Schema::create('departamentos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->bigInteger('fk_facultad')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('departamentos');
	}
}