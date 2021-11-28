<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControlador extends Controller
{
    function login(){
        return view('login');
    }

    function valida(Request $request){
        $usuario = $request->input('inusuario');
        $pass = $request->input('incont');

if ($usuario==0){
        return view('fallousuario');
}else if ($pass==0){
    return view('fallocontra');
}else {
    return view('exito');
}
    }
}