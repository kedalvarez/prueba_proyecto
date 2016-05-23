<?php

namespace proyecto_prueba\Http\Requests;

use proyecto_prueba\Http\Requests\Request;

class UsuarioRequest extends Request
{
    public function authorize()
    {
       return true;
    }


    public funtion rules()
    {
       return [

              'cedula' => '',
              'nombre' => 'required',
              'apellido' => 'required',
              'edad' => 'required',
              'telefono' => 'required',

               ];

    }



}