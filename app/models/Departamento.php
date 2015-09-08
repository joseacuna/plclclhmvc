<?php

class Departamento extends Eloquent {

	protected $table = 'departamentos';
	public $timestamps = false;

	public function facultad()
	{
		return $this->belongsTo('Facultad');
	}

	public function docentes()
	{
		return $this->hasMany('Docente', 'fk_departamento');
	}

}