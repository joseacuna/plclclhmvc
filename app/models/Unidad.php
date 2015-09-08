<?php

class Unidad extends Eloquent {

	protected $table = 'unidades';
	public $timestamps = false;

	public function semana()
	{
		return $this->hasMany('Semana');
	}

	public function detalleunidad()
	{
		return $this->hasMany('ContenidoUnidad', 'fk_unidad');
	}

	public function forma()
	{
		return $this->belongsTo('Planificacion');
	}

}