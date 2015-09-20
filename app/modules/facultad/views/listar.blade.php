@extends('principal::_layout.master')
@section('contenido')


   <div class="table-responsive">
   	<table class="table table-hover">
   		<thead>
   			<tr>
   				<th>ID</th>
                <th>Facultad</th>

   			</tr>
   		</thead>
   		<tbody>
        @foreach($facultades as $facultad)
   			<tr>
   				<td>{{$facultad->id}}</td>
				<td>{{$facultad->nombre}}</td>
                <td>
                    <a href="{{URL::to('facultad/update/'. $facultad->id)}}" data-placement="top" data-toggle="tooltip" title="Editar">
                        <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
                            <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                    </a>


                    <a href="{{URL::to('facultad/delete/'.$facultad->id)}}" data-placement="top" data-toggle="tooltip" title="Eliminar">
                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </a>
                </td>
   			</tr>
            @endforeach
   		</tbody>
   	</table>
   </div>
    @stop