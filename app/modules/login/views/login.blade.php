@include('principal::_layout.master')
@section('contenido')
    <h1>hola</h1>
    <div class="login-form">
        {{Form::open(array('url' => '/', 'method' => 'POST'))}}
            {{Form::label('rut','RUN')}}

        {{Form::close()}}

    </div>
    @stop