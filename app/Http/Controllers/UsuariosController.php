<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()

    {
        $usuarios =  Usuario::get();

        return view('auth.users.list', ['usuarios' => $usuarios]);
    }
}
