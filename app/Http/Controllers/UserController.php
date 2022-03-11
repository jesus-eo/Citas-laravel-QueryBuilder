<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function formlogin()
    {
        return view('login');
    }

/*Mirar los return*/
    public function login()
    {
        $validados = request()->validate([
            'id_usuario' => 'required',
            'contraseña' => 'required',
        ]);
        $usuario = DB::table('usuarios')
        -> where('id_usuario',$validados['id_usuario'])
        ->where('contraseña', $validados['contraseña']);

        if ($usuario->exists()) {
            //Crea la variable de sesión
            session(['usuario' => $validados['id_usuario']]);
            return redirect('/citas/index')->with('succes', 'El usuario ha iniciado sesión.');
        }
        return redirect()->back()->with('fault', 'Usuario o contraseña incorrectos.');
    }


    public function logout()
    {   //Pregunta si existe la variable de sesión y la borra
        if(request()->session()->has('usuario')){
            request()->session()->forget('usuario');
            return redirect('/citas/index')->with('succes', 'Sesión cerrada');
        }
        return redirect('/citas/index')->with('fault', 'No has iniciado sesión');
    }
}
