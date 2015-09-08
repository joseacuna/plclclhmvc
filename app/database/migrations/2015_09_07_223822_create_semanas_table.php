<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemanasTable extends Migration {

	public function up()
	{
		Schema::create('semanas', function(Blueprint $table) {
			$table->increments('id');
			$table->date('fechainicial');
			$table->integer('numanual');
			$table->integer('numsemestral');
		});
	}

	public function down()
	{
		Schema::drop('semanas');
	}
}