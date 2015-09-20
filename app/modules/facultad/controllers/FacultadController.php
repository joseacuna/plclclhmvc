<?php
/**
 * Created by PhpStorm.
 * User: Phobos
 * Date: 12/09/2015
 * Time: 13:04
 */

namespace App\Modules\Facultad\Controllers;

use View, Input, Session;
use Facultad;

class FacultadController extends \BaseController
{


    public function getIndex()
    {

        $facultades = Facultad::all();

        return View::make('facultad::listar')->with('facultades', $facultades);
    }

    public function getCreate()
    {
        return View::make('facultad::crear');
    }

    public function postCreate()
    {
        $input = Input::all();

        $facultad = new Facultad();
        $facultad->nombre = $input['nombre'];
        $facultad->save();
        Session::flash('mensaje', 'se ha agregado una nueva facultad');
        Session::flash('class', 'alert alert-success');

    }

    public function getUpdate($id)
    {
        $dataFacultad = Facultad::find($id);
        return View::make('facultad::actualizar')->with('dataFacultad', $dataFacultad);
    }

    public function postUpdate($id)
    {
        $input = Input::all();
        $facultad = Facultad::find($id);

        $facultad->nombre = $input['nombre'];
        $facultad->save();
        Session::flash('mensaje', 'nombre se ha modificado');
        Session::flash('class', 'alert alert-success');
    }

    public function getDelete($id = null)
    {
        $facultad = Facultad::find($id);
        $facultad->delete();
        Session::flash('mensaje','Se ha Eliminado La Facultad del Registro');
        return \Redirect::to('/facultades/');
    }
}