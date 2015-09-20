<?php
/**
 * Created by PhpStorm.
 * User: Phobos
 * Date: 08/09/2015
 * Time: 22:41
 */

namespace App\Modules\Principal\Controllers;

use Docente, Facultad;
use View, Redirect, Input, Session, Hash;

class DocenteController extends \BaseController
{
    public function getIndex()
    {
        $datosDocentes = Docente::all();
        return View::make('docente::listar')->with('datosDocentes', $datosDocentes);
    }

    public function getCreate()
    {
        $facultades = Facultad::lists('nombre', 'id');
        return View::make('docente::crear')
            ->with('facultades', $facultades);
    }

    public function postCreate()
    {
        $inputs = Input::all();
        $validar = Docente::validaDocente($inputs);


        if ($validar->fails()) {
            return Redirect::back()->withErrors($validar->messages());

        } else {

            $docente = new Docente();
            $docente->rut = $inputs["rut"];
            $docente->password = Hash::make($inputs["rut"]);
            $docente->fk_departamento = $inputs['departamento'];
            $docente->nombre = $inputs["nombre"];
            $docente->apellidopaterno = $inputs["apellidopaterno"];
            $docente->apellidomaterno = $inputs["apellidomaterno"];
            $docente->email = $inputs["email"];
            $docente->genero = $inputs["genero"];
            $docente->save();
            Session::flash('mensaje', 'el registro fue correctamente acualizado');
        }
    }

    public function getUpdate($id)
    {
        $datosDocentes = Docente::find($id);
        $facultades = Facultad::lists('nombre', 'id');
        $departamento = Docente::join('departamentos', 'departamento.id', '=', 'docentes.fk_departamento', 'inner')
            ->where('docentes.id', '=', $id)
            ->get();
        $sFacultad = Facultad::where('id', '=', $departamento->lists('fk_facultad'))->lists('id');
        return $this->layout->contenido = View::make('docente::update')
            ->with('datosDocentes', $datosDocentes)
            ->with('facultades', $facultades)
            ->with('departamento', $departamento->lists('nombre', 'id'))
            ->with('sFacultad', $sFacultad);

    }

    public function postUpdate()
    {

    }

    public function getDelete()
    {

    }


}