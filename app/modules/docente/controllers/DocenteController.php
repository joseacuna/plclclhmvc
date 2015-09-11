<?php
/**
 * Created by PhpStorm.
 * User: Phobos
 * Date: 08/09/2015
 * Time: 22:41
 */

namespace app\modules\docente\controllers;
use Docente,Facultad;
use View;

class DocenteController extends \BaseController
{
    public function get_index(){
        $datosDocentes = Docente::all();
        return View::make('')->with('datosDocentes',$datosDocentes);
    }
    public function get_create(){
        $facultades=Facultad::lists('nombre','id');
        return  View::make('Docente.crearDocente')
                ->with('facultades',$facultades);
    }



}