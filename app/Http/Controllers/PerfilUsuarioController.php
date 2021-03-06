<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class PerfilUsuarioController extends Controller
{
    public function index(){
        return view('perfil-usuario');
    }

    public function atualizarInfo(Request $request){
        $email = $_SESSION['email'];
        $antigaSenha =$request->get('antiga');
        $novaSenha = Hash::make($request->get('nova'));
        
        $tabela = new User();
        $usuario = $tabela->Where('user_email',$email)->get()->first();
        if(Hash::check($antigaSenha,$usuario->user_pass)){
            $usuario->user_pass = $novaSenha;
        }else{
            $erroSenha = 'Senha Antiga está inválida!';
        }

        $imgPerfil = $usuario->user_url;
        if($request->file('imagem')){
            $nome =strtolower($usuario->user_login).$usuario->id;
            $extensao = $request->file('imagem')->extension();
            $fileName = "{$nome}.{$extensao}";
            
            $imgPerfil =$fileName;
            $usuario->user_url = $imgPerfil;

            $upload = $request->file('imagem')->storeAs('usersImg',$fileName);
            $_SESSION['img'] = '/storage/usersImg/'.$fileName;
        }

        $usuario->save();

        if($erroSenha != ''){
            return redirect()->back()->with(['erro' =>$erroSenha]);
        }
        
        return redirect()->route('home');
       
    }

    public function cadastrar(){
        return view('cadastro-usuario');
    }

    public function salvar(Request $request){
         
        $regras = [
            'email' => 'email',
            'nome'  => 'required',
            'senha' => 'required'
        ];
        $retorno =[
            'required' => 'Você esqueceu de preencher! (Campo :attribute)',
            'email' => 'Digite um email válido!'
        ];

        $request->validate($regras,$retorno);

        //Recuperando os paramêtros
        $nome = $request->get('nome');
        $email = $request->get('email');
        $senha = Hash::make($request->get('senha'));



        //Consultando no DB
        $user = new User();
        $usuario = $user->where('user_email',$email)->get()->first();
        if(isset($usuario->user_login)){
            return view('cadastro-usuario',['cadastrado'=>'Usuário já cadastrado']);

        }else{
            $user->user_login = $nome;
            $user->user_email = $email;
            $user->user_pass = $senha;
            $user->user_status = 0;
            $user->save();
            return redirect()->route('login');
        }
    }


    public function contato(Request $request){
        $regras = [
            'emailcontato' => 'email',
            'nonomecontatome'  => 'required',
            'mensagemcontato' => 'required'
        ];
        $retorno =[
            'required' => 'Você esqueceu de preencher! (Campo :attribute)',
            'email' => 'Digite um email válido!'
        ];

        $request->validate($regras,$retorno);

        $nome = $request->get('nomecontato');
        $email = $request->get('emailcontato');
        $mensagem = $request->get('mensagemcontato');
        $assunto = $request->get('assuntocontato');

        $para = "contato@augustus.digital.com.br";
        $corpo = "Nome:".$nome." - E-mail:".$email."\r\n".$mensagem;
        $cabecalho = "From:contato@augustus.digital.com.br"."\r\n".
                    "Reply-To:".$email."\r\n".
                    "X-Mailer: PHP/".phpversion();

        mail($para,$assunto,$corpo,$cabecalho);
        echo "Enviado";
    }
}
