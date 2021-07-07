<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aproveitamento;
use App\Relatorio;

class PainelAproveitamentoController extends Controller
{
    public function index(){
        $formas = Aproveitamento::all();

        return view('painel.ver-formas-painel',['formas' =>$formas]);
    }

    public function editar(Request $request){
        $editar = $request->id;

        return redirect()->route('incluir-formas-painel',['formas' => $editar]);
    }

    public function excluir(Request $request){
        $excluir = Aproveitamento::find($request->id);
        Aproveitamento::destroy($excluir);

        return redirect()->route('ver-formas-painel');
    }

    public function novo(Request $request){
        if($request->formas){
            $id = $request->formas;
            $dados = Aproveitamento::Where('id',$id)->get()->first();
            $relatorio = Relatorio::Where('id',$dados->id_relatorio)->get()->first();
            $relatorios = Relatorio::all();
            return view('painel.incluir-formas-painel',['dados' => $dados,'relatorio' => $relatorio,
             'relatorios' => $relatorios]);
        }else{
            $relatorios = Relatorio::all();
            return view('painel.incluir-formas-painel',['relatorios' => $relatorios]);
        }
    }

    public function salvarNovo(Request $request){
        $id = $request->id;
        $titulo = $request->titulo;
        $relatorio = $request->relatorio;
        $chance = $request->chance;
        $descricao = $request->descricao;
        $vantagens = $request->vantagens;
        $desvantagens = $request->desvantagens;
        $risco = $request->risco;
        $documentos = $request->documentos;

        if($id != ''){
            $verificar = Aproveitamento::Where('id',$id)->get()->first();
        }   
        
        if($verificar != ''){
            Aproveitamento::Where('id',$id)->update([
                'titulo'                    => $titulo,
                'id_relatorio'              => $relatorio,
                'chance_de_exito'           => $chance,
                'descricao'                 => $descricao,
                'vantagens'                 => $vantagens,
                'desvantagens'              => $desvantagens,
                'risco'                     => $risco,
                'documentos'                => $documentos
                
            ]);

            return redirect()->route('ver-formas-painel',['mensagem' => 'Atualizado!']);
        }else{
            Aproveitamento::create([
                'titulo'                    => $titulo,
                'id_relatorio'              => $relatorio,
                'chance_de_exito'           => $chance,
                'descricao'                 => $descricao,
                'vantagens'                 => $vantagens,
                'desvantagens'              => $desvantagens,
                'risco'                     => $risco,
                'documentos'                => $documentos
            ]);

            return redirect()->route('ver-formas-painel',['mensagem' => 'Criado!']);
        }
    }
}
