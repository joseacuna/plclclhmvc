<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContenidosunidadesTable extends Migration {

	public function up()
	{
		Schema::create('contenidosunidades', function(Blueprint $table) {
			$table->increments('id');
			$table->string('contenido');
			$table->string('actividad');
			$table->bigInteger('fk_unidad')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('contenidosunidades');
	}
}