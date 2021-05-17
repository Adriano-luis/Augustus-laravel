<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(Request $request){
        $erro = '';
        if($request->get('erro') == 1){
            $erro = 'E-mail e/ou senha inválidos';
        } elseif($request->get('erro') == 2){
            $erro = 'Necessário autenticação';
        }
        return view('login',['erro'=>$erro]);
    }



    public function autenticar(Request $request){
        //Validação
        $regras = [
            'emaiLogin' => 'email',
            'passwordLogin' => 'required'
        ];
        $retorno =[
            'required' => 'Você esqueceu de me preencher! (Campo :attribute)',
            'emaiLogin.email' => 'Digite um email válido!'
        ];
        $request->validate($regras,$retorno);

        //Recuperando os paramêtros
        $email = $request->get('emaiLogin');
        $senha = $request->get('passwordLogin');
        //$senha = md5::make($senha);

        //Consultando no DB
        $user = new User();
        $usuario = $user->where('user_email',$email)->where('user_pass',$senha)->get()->first();
        if(isset($usuario->user_nicename)){

            session_start();
            $_SESSION['id'] = $usuario->id;
            $_SESSION['nome'] = $usuario->user_login;
            $_SESSION['email'] = $usuario->user_email;

            return redirect()->route('home');

        }else {
            return redirect()->route('login',['erro'=>1]);
        }

    }



    public function sair(){
        session_destroy();
        return redirect()->route('login');
    }
}