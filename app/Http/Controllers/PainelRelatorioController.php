<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relatorio;

class PainelRelatorioController extends Controller
{
    public function index(){
        $relatorios = Relatorio::all();

        return view('painel.ver-relatorio-painel',['relatorios' =>$relatorios]);
    }

    public function editar(Request $request){
        $editar = Relatorio::find($request->id);

        return redirect()->route('incluir-relatorio-painel',['relatorio' => $editar]);

    }
    public function excluir(Request $request){
        $excluir = Relatorio::find($request->id);
        Relatorio::destroy($excluir);

        return redirect()->route('ver-relatorio-painel');
    }

    public function novo(Request $request){
        if($request->relatorio){
            $dados = $request->relatorio;
            return view('painel.incluir-relatorio-painel',['dados' => $dados]);
        }else{
            return view('painel.incluir-relatorio-painel');
        }
    }

    public function salvarNovo(Request $request){

    }

}
