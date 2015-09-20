@extends('principal::_layout.master')
@section('contenido')
    {{Form::open()}}
    	<legend>Form Title</legend>

    	<div class="form-group">

            {{Form::label('facultad','Facultad')}}
            {{Form::text('facultad',$dataFacultad->nombre,array('class'=>'form-control'))}}


    	</div>


{{Form::submit('Crear',array('class'=>'btn btn-primary'))}}

    {{Form::close()}}

    @stop