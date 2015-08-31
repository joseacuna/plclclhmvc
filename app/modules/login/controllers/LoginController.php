<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 24/08/2015
 * Time: 17:44
 */

namespace App\Modules\Login\Controllers;

use View,Auth,Input,Response,Redirect;

class LoginController extends \BaseController{
   //protected $layout='principal::_layout.master';
    public static function getLogin(){
        if(\Auth::check()){
            return \Redirect::to('/');
        }

        //return View::make('login::formlogin');
        return Response::view('login::formlogin');
    }

    public function postLogin(){
        $datosLogin= array(
            'rut'=>Input::get('rut'),
            'password'=>Input::get('password')
        );

        if (Auth::attempt($datosLogin)){
            $usuario=Docente::whereRaw('rut=?',[Input::get('rut')])->get();

            return Response::json($usuario);
        }else{
            return 'login fail';
        }

    }
    public function getLogOut(){
        Auth::logout();

        return Redirect::to('login')->with('error_message','Session Finalizada');
    }
}