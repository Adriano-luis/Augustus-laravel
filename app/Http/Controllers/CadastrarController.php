<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class CadastrarController extends Controller
{
    public function index(){

        return view("cadastrar-empresa");
    }

    public function salvar(Request $request){
        $razaoSocial = $request->get('razao');
        $CNPJ = $request->get('cnpj');
        $ano = $request->get('ano');
        $sede = $request->get('cidade');
        $estados = $request->get('estado');
        $tipo = $request->get('societario');

        $novo = new Empresa();
        $novo->id_cliente=$_SESSION['id'];
        $novo->nome = $razaoSocial;
        $novo->cnpj =  $CNPJ;
        $novo->ano = $ano;
        $novo->cidade = $sede;
        $novo->estado = $estados;
        $novo->tipo = $tipo;
        $novo->save();

        return redirect()->route('home');
    }
}
