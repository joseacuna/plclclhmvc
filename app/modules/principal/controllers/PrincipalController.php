<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 24/08/2015
 * Time: 14:52
 */

namespace App\Modules\Principal\Controllers;

use View,Response;


class PrincipalController extends \BaseController{

    public function getHome(){


//        return View::make('principal::index');
        $vista=View::make('principal::appbar');
        $vista->nest('menu','principal::menu');

        return $vista;



    }




}