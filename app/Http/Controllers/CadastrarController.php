<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class CadastrarController extends Controller
{
    public function index(Request $request){
        $erro = $request->get('erro');
        if(isset($erro) && $erro == 1){
            return view("cadastrar-empresa",['erro'=>'Formato de data inválido']);
        }

        return view("cadastrar-empresa");
    }

    public function salvar(Request $request){
        $razaoSocial = $request->get('razao');
        $CNPJ = $request->get('cnpj');
        $ano = $request->get('ano');
        $sede = $request->get('cidade');
        $estados = $request->get('estado');
        $tipo = $request->get('societario');

        $ano = explode('/',$ano);
        if (sizeOf($ano) > 1) {
            return redirect()->route('nova-empresa',['erro'=>1]);
        }

        $novo = new Empresa();
        $novo->id_cliente=$_SESSION['id'];
        $novo->nome = $razaoSocial;
        $novo->cnpj =  $CNPJ;
        $novo->ano = $ano[0];
        $novo->cidade = $sede;
        $novo->estado = $estados;
        $novo->tipo = $tipo;
        $novo->save();

        return redirect()->route('home');
    }
}
