<?php

namespace proyecto_prueba\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\UsuarioRequest;
use App\Usuario;

class UsuarioController extends BaseController
{
	public function index()
	{
	  	$usuarios = Usuario::all();
		return view ('Usuario.info',compact('usuarios'));
	}

	public function nuevoUsuario()
	{
		return view('Usuario.insert');
	}

	public function edit($id)
	{
      $usuarios = Usuario::where('cedula',$id)->first();
      return view = ('Usuario.update',compact('usuarios'));
	}

	public function delete($id)
	{
       Usuario::where('cedula',$id)->delete();
       return back();
	}

	public function save(UsuarioRequest $request)
	{
		$u = new Usuario;
		
		$u->cedula= $request->input('cedula');
		$u->nombre= $request->input('nombre');
		$u->apellido= $request->input('apellido');
		$u->edad= $request->input('edad');
		$u->telefono= $request->input('telefono');
        
        $s->save();

        return back()->withInput();
	}

	public function updateinfo(UsuarioRequest $request)
	{
		$u = new Usuario;

		$data = $arrayName = array('cedula' => , $request->input('cedula'),
			                   'nombre' => , $request->input('nombre'),
			                   'apellido' => , $request->input('apellido'),
			                   'edad' => , $request->input('edad'),
			                   'telefono' => , $request->input('telefono'));

		$u->where('cedula', $request->input('cedula'))->update($data);
		return Redirect('/');
	}
}

