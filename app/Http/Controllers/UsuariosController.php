<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class UsuariosController extends Controller
{
    public function index()   // ISSO É UM METODO

    {
        $usuarios =  Usuario::get();

        return view('auth.users.list', ['usuarios' => $usuarios]);
    }

    public  function new()
    {
        return view('auth.users.form');
    }

    public function add(Request $request)
    {
        $usuario =  new Usuario;
        $usuario = $usuario->create($request->all());

        return Redirect::to('/users');
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);

        return view('auth.users.form', ['usuario' => $usuario]);
    }

    public function update($id, Request $request)
    {

        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return Redirect::to('/users');
    }
    public function delete($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return Redirect::to('/users');
    }
}
