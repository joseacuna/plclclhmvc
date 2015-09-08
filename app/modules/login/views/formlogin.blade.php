
@extends('principal::_layout.master')

@section('contenido')
    <div class="login-form">
        {{ Form::open(array('url' => '/', 'method' => 'POST')) }}
        <h1 class="text-light">Iniciar Sesion</h1>
        <hr class="thin">
        <br>
        <div class="input-control text required full-size">
            {{Form::label('rut',' RUN')}}
            {{Form::text('rut',$value=null,array('class'=>"form-control",'placeholder'=>"12.345.678-9"))}}
        </div>
        <br><br>
        <div class="input-control text full-size" data-role="input">
            {{Form::label('Password:',$value=null,array('class'=>"col-sm-2 control-label"))}}
            {{Form::password('password',array('class'=>"form-control"))}}
        </div>

    </div>



    {{Form::submit('iniciar session',array('class'=>"btn btn-primary"))}}

    {{ Form::close() }}

@stop
@section('script')
    <script type="text/javascript">
        var $inputRut = $('#rut');
        $inputRut.Rut({
            on_error: function(){
                $inputRut.closest("div").addClass("input-state-error");
            },
            on_success: function(){
                $inputRut.closest("div").removeClass("has-error");
                $inputRut.closest("div").addClass("has-success has-feedback");
            }
        });
    </script>
@stop