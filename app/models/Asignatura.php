<?php

class Asignatura extends Eloquent {

	protected $table = 'asignaturas';
	public $timestamps = false;

	public function carreras()
	{
		return $this->belongsToMany('Carrera');
	}

	public function cursos()
	{
		return $this->hasMany('Curso', 'asignatura_id');
	}

}