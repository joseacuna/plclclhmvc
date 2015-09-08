<?php

class ContenidoUnidad extends Eloquent {

	protected $table = 'contenidosunidades';
	public $timestamps = false;

	public function unidad()
	{
		return $this->belongsTo('\Unidad');
	}

}