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
        $editar = $request->id;

        return redirect()->route('incluir-relatorio-painel',['relatorio' => $editar]);
    }

    public function excluir(Request $request){
        $excluir = Relatorio::find($request->id);
        Relatorio::destroy($excluir->id);

        return redirect()->route('ver-relatorio-painel');
    }

    public function novo(Request $request){
        if($request->relatorio){
            $id = $request->relatorio;
            $dados = Relatorio::Where('id',$id)->get()->first();
            return view('painel.incluir-relatorio-painel',['dados' => $dados]);
        }else{
            return view('painel.incluir-relatorio-painel');
        }
    }

    public function salvarNovo(Request $request){
        $id = $request->id;
        $titulo = $request->titulo;
        $subtitulo = $request->subtitulo;
        $forma = $request->forma;
        $probabilidade = $request->probabilidade;
        $tributacao = $request->tributacao;
        $resumo = $request->resumo;
        $entendendo = $request->entendendo;
        $posicao = $request->posicao;
        $ganho = $request->ganho;

        if($id != ''){
            $verificar = Relatorio::Where('id',$id)->get()->first();
        } else{
            $verificar = '';
        }
        
        if($verificar != ''){
            Relatorio::Where('id',$id)->update([
                'post_title'                    => $titulo,
                'post_excerpt'                  => $subtitulo,
                'resumo'                        => $resumo,
                'entendendo_a_opostunidade'     => $entendendo,
                'posicoes_nos_tribunais'        => $posicao,
                'estimativa_de_ganho'           => $ganho,
                'forma'                         => $forma,
                'probabilidade'                 => $probabilidade,
                'tributacao'                    => $tributacao
                
            ]);

            return redirect()->route('ver-relatorio-painel',['mensagem' => 'Atualizado!']);
        }else{
            Relatorio::create([
                'post_title'                    => $titulo,
                'post_excerpt'                  => $subtitulo,
                'resumo'                        => $resumo,
                'entendendo_a_opostunidade'     => $entendendo,
                'posicoes_nos_tribunais'        => $posicao,
                'estimativa_de_ganho'           => $ganho,
                'forma'                         => $forma,
                'probabilidade'                 => $probabilidade,
                'tributacao'                    => $tributacao,
                'post_type'                     => 'relatorio'
            ]);

            return redirect()->route('email-painel');
        }
    }

}
