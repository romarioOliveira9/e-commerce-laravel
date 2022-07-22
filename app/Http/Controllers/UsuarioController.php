<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\User;

class UsuarioController extends Controller
{
    function login(Request $req)
    {
        $usuario = User::where(['email' => $req->email])->first();

        if ($usuario || Hash::check($req->senha, $usuario->senha)) {
            return "Nome de usuário ou senha não corresponde";
        } else {
            $req->session()->put('usuario', $usuario);
            return redirect('/');
        }
    }

    function registrar(Request $req)
    {
        // return $req->input();
        $usuario = new User;
        $usuario->nome = $req->nome;
        $usuario->email = $req->email;
        $usuario->senha = Hash::make($req->senha);
        $usuario->save();
        return redirect('/login');
    }
}
