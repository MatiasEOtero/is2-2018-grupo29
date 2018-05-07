<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::orderBy('Id', 'DESC')->paginate();
        return view('usuarios.index', compact('usuarios'));
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
