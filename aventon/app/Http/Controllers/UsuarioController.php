<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::orderBy('Id', 'DESC')->paginate();
        return view('usuarios.index', compact('usuarios'));
    }


    public function create()
    {
        return view('usuarios.create');
    }


    public function store(UsuarioRequest $request)
    {
        $usuario = new Usuario;

        $usuario->name = $request->name;
        $usuario->apellido = $request->apellido;
        $usuario->password = $request->password;
        $usuario->email = $request->email;
        $usuario->fechanacimiento = $request->fechanacimiento; // Se rompe el programa al ingresar una fecha no valida //
        $usuario->calificacion = 0;
        $usuario->cuenta = 0;
        $usuario->deudapenalizado = 0;
        $usuario->deudacalificacion = 0;
        $usuario->baja = 0;

        $usuario->save();

        return redirect()->route('usuarios.index')
                        ->with('info', 'El usuario fue guardado.');
    }


    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit', compact('usuario'));
    }


    public function update(UsuarioRequest $request, $id)
    {
        $usuario = Usuario::find($id);

        $usuario->name = $request->name;
        $usuario->apellido = $request->apellido;
        $usuario->password = $request->password;
        $usuario->email = $request->email;
        $usuario->fechanacimiento = $request->fechanacimiento;

        $usuario->save();

        return redirect()->route('usuarios.index')
                        ->with('info', 'El usuario fue actualizado.');
    }


    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.show', compact('usuario'));
    }


    // Nos toca generarlo de otra forma.
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return back()->with('info', 'El usuario fue eliminado.');
    }

}
