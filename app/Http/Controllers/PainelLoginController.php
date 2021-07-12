<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User_Painel;

class PainelLoginController extends Controller
{
    public function index(Request $request){
        return view('painel.login-painel');
    }

    public function autenticar(Request $request){
        //Validação
        $regras = [
            'email' => 'email',
            'password' => 'required'
        ];
        $retorno =[
            'required' => 'Você esqueceu de me preencher! (Campo :attribute)',
            'email.email' => 'Digite um email válido!'
        ];
        $request->validate($regras,$retorno);

        //Recuperando os paramêtros
        $email = $request->get('email');
        $senha = $request->get('password');

        //Consultando no DB
        $user = new User_Painel();
        $usuario = $user->where('email',$email)->get()->first();
        if (Hash::check($senha, $usuario->senha)) {
            if(isset($usuario->nome)){

                session_start();
                $_SESSION['id'] = $usuario->id;
                $_SESSION['nome'] = $usuario->nome;
                $_SESSION['email'] = $usuario->email;
                
    
                return redirect()->route('home-painel');
    
            }
        }

        return redirect()->route('login-painel',['erro'=>1]);
    }


    public function sair(){
        session_destroy();
        return redirect()->route('login-painel');
    }
}
