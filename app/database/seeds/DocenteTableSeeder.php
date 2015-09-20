<?php

class DocenteTableSeeder extends Seeder{
    public function run(){
        DB::table('docentes')->delete();
        Docente::create(
            array(
                'rut'=>'1-9',
                'password'=>Hash::make('admin'),
                'nombre'=>'admin',
                'apellidopaterno'=>'vacio',
                'apellidomaterno'=>'vacio',
                'email'=>'admin@admin.com',
                'genero'=>'m',


                    )

        );

    }

}