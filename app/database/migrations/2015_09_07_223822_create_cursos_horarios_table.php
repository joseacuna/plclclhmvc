<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursosHorariosTable extends Migration {

	public function up()
	{
		Schema::create('cursos_horarios', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('curso_id')->unsigned();
			$table->bigInteger('horario_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('cursos_horarios');
	}
}