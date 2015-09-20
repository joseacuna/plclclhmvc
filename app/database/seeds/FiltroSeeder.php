<?php
/**
 * Created by PhpStorm.
 * User: Phobos
 * Date: 15/09/2015
 * Time: 19:05
 */
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
abstract class FiltroSeeder extends Seeder{
    /**
     * @throws Exception
     */
    public function run(){
        if(!isset($this->table)){
            throw new Exception('No se ha especificado Tabla');
        }
        if(!isset($this->data)){
            throw new Exception('No Se especifico Datos');
        }
        DB::table($this->table)->truncate();
        DB::table($this->table)->insert($this->data);
    }



}