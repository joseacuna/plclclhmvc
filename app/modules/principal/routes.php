<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/home', array('as'=>'home','uses'=>'App\Modules\Principal\Controllers\PrincipalController@getHome'));
Route::get('/menu',array('as'=>'menu','uses'=>'App\Modules\Principal\Controllers\PrincipalController@getMenu'));
Route::get('/rutas',array('as'=>'rutas','uses'=>'App\Modules\Principal\Controllers\PrincipalController@getRutas'));
////////////////////////////////////////////////////////////////////////////////////////////////////
//******************************rutas de aplicacion******************************/
//DropDown de Departamentos
Route::get('ajax-deptcat',function (){
    $input=Input::get('facultad_id');
    $departamento=Departamento::where('fk_facultad','=',$input)->get();

    return Response::json($departamento);
});
//DropDown de Escuelas
Route::get('ajax-escucat',function(){
    $input=Input::get('facultad_id');
    $escuela=Escuela::where('fk_facultad','=',$input)->get();
    return Response::json($escuela);
});
//DropDown de Carreras
Route::get('ajax-carrcat',function(){
    $input=Input::get('escuela_id');
    $carrera=Carrera::where('fk_escuela','=',$input)->get();
    return Response::json($carrera);
});
//DropDorn de asignaturas con carreras

Route::get('ajax-asigcat',function(){
    $input=Input::get('carrera_id');
    $asignatura=Carrera::find($input)->asignaturas()->get();
    return Response::json($asignatura);
});

//dropdown diasPeriodos
Route::get('ajax-dia',function(){
    $periodo=Input::get('p_id');
    $dia=Horario::where('periodo','=',$periodo)->get();
    return Response::json($dia);

});