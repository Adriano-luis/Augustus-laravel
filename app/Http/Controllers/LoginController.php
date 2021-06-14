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

        //Consultando no DB
        $user = new User();
        $usuario = $user->where('user_email',$email)->get()->first();
        if (Hash::check($senha, $usuario->user_pass)) {
            if(isset($usuario->user_nicename)){

                session_start();
                $_SESSION['id'] = $usuario->id;
                $_SESSION['nome'] = $usuario->user_login;
                $_SESSION['email'] = $usuario->user_email;
    
                if($usuario->user_url != ''){
                    $_SESSION['img'] = '/storage/usersImg/'.$usuario->user_url;
                }else{
                    $_SESSION['img'] = '/images/user.png';
                }
                
    
                return redirect()->route('home');
    
            }
        }

        return redirect()->route('login',['erro'=>1]);

    }



    public function sair(){
        session_destroy();
        return redirect()->route('login');
    }
}