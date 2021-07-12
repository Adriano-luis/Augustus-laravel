<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User_Painel;

class PainelController extends Controller
{
    public function index(){
        return view('painel.home-painel');
    }

    public function novo(){
        return view('painel.novo-usuario-painel');
    }

    public function novoPost(Request $request){
        $regras = [
            'nomeUsuario' => 'required',
            'emailUsuario'  => 'email',
            'senhaUsuario' => 'required'
        ];
        $retorno =[
            'required' => 'Você esqueceu de preencher! (Campo :attribute)',
            'email' => 'Digite um email válido!'
        ];

        $request->validate($regras,$retorno);

        $nome = $request->get('nomeUsuario');
        $email = $request->get('emailUsuario');
        $senha = Hash::make($request->get('senhaUsuario'));

        //Consultando no DB
        $user = new User_Painel();
        $usuario = $user->where('email',$email)->get()->first();
        if(isset($usuario->nome)){
            return view('painel.novo-usuario-painel',['cadastrado'=>'Usuário já cadastrado']);

        }else{
            User_Painel::create([
                'nome'                   => $nome,
                'email'                  => $email,
                'senha'                  => $senha,
            ]);
            return redirect()->route('login-painel');
        }

    }

    public function alterarSenha(){
        return view('painel.alterar-senha-painel');
    }

    public function alterarSenhaPost(Request $request){
        $regras = [
            'email' => 'email',
            'antigaSenha'  => 'required',
            'novaSenha' => 'required'
        ];
        $retorno =[
            'required' => 'Você esqueceu de preencher! (Campo :attribute)',
            'email' => 'Digite um email válido!'
        ];

        $request->validate($regras,$retorno);
        
        $email = $request->get('email');
        $antigaSenha =$request->get('antigaSenha');
        $novaSenha = Hash::make($request->get('novaSenha'));
        
        $tabela = new User_Painel();
        $usuario = $tabela->Where('email',$email)->get()->first();
        if(Hash::check($antigaSenha,$usuario->senha)){
            $usuario->senha = $novaSenha;
        }else{
            $erroSenha = 'Senha Antiga está inválida!';
        }
        $usuario->save();

        if(isset($erroSenha)){
            return redirect()->route('alterar-senha-painel',['erro' => $erroSenha]);
        }
        
        return redirect()->route('login-painel');
    }
}
