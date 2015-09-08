<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHorariosTable extends Migration {

	public function up()
	{
		Schema::create('horarios', function(Blueprint $table) {
			$table->increments('id');
			$table->string('periodo');
			$table->string('dia');
		});
	}

	public function down()
	{
		Schema::drop('horarios');
	}
}