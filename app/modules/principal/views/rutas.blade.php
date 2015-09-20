@extends('principal::_layout.master')
@section('contenido')
    @foreach(Route::getResourceUri() as $ruta)
        {{$ruta->getName()}}
        <br>

    @endforeach

