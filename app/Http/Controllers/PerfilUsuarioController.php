<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PerfilUsuarioController extends Controller
{
    public function index(){
        return view('perfil-usuario');
    }

    public function cadastrar(){
        return view('cadastro-usuario');
    }

    public function salvar(Request $request){
         

        //Recuperando os paramêtros
        $nome = $request->get('nome');
        $email = $request->get('email');
        $senha = $request->get('senha');



        //Consultando no DB
        $user = new User();
        $usuario = $user->where('user_email',$email)->get()->first();
        if(isset($usuario->user_login)){

            return redirect()->route('home');
        }else{
            $user->user_login = $nome;
            $user->user_email = $email;
            $user->user_pass = $senha;
            $user->user_status = 0;
            $user->save();
            return redirect()->route('cadastrar-usuario');
        }
    }
}
