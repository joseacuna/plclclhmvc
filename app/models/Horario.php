<?php

class Horario extends Eloquent {

	protected $table = 'horarios';
	public $timestamps = false;

	public function cursos()
	{
		return $this->belongsToMany('Curso');
	}

}