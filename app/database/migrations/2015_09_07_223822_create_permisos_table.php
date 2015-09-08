<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermisosTable extends Migration {

	public function up()
	{
		Schema::create('permisos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('tipo_permiso');
		});
	}

	public function down()
	{
		Schema::drop('permisos');
	}
}