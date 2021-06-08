<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Empresa;
use App\Resposta;
use App\Pergunta;
use App\Resposta_formulario;
use App\Relatorio;

class VerEmpresasController extends Controller
{
    public function index(){
        //Empresas
        $empresa = new Empresa();
        $listaEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->get();
        $qtEmpresas = sizeof($listaEmpresa);
        
        //Dados das empresas
        $dadosEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->paginate(3);
        
        //Porcentagem das Informações fornecidas
        $porcentagemConcluido = [];
        $auxContadorPergunta=Pergunta::all();
        $contadorPergunta = sizeof($auxContadorPergunta);
        $respostas_form = new Resposta_formulario() ;
        foreach($dadosEmpresa as $empresaId){
            $numRespostas = $respostas_form->where('id_formulario','=',$empresaId->id)->distinct()->count('id_pergunta');
            $porcentageminformacoes = ($numRespostas*100)/$contadorPergunta;
            array_push($porcentagemConcluido,$porcentageminformacoes);
        }
           
        //Oportunidades
        if($qtEmpresas > 0){
            $j=0;
            foreach($listaEmpresa as $empresaOp){
                
                //Busca relatórios
                $listaRelatorio = array();
                $arrRelatorioDuplicado = array();
                $mysqli = DB::select('CALL SP_EXIBE_RELATORIO(?)', [$empresaOp->id]);
                if (sizeof($mysqli) > 0){
                    foreach ($mysqli as $value){
                        $auxListaRelatorio[] = $value->id_relatorio;
                    }
                }

                //Conta Oportunidades e qual o Relatório
                $listaRelatorio[$empresaOp->nome]=$auxListaRelatorio;
                $auxContRelatorio = sizeof($listaRelatorio[$empresaOp->nome]);
                $auxContOportunidade = 0;
                if($auxContRelatorio > 0){
                    for ( $i = 0; $i < $auxContRelatorio;$i++) {
                        $idRelatorio = $listaRelatorio[$empresaOp->nome][$i];
                        $dadosRelatorio = Relatorio::Where('id',$idRelatorio)->get()->first();

                        if($dadosRelatorio != ""){
                            if($dadosRelatorio->post_title != ""){
                                if(!in_array($dadosRelatorio->post_title, $arrRelatorioDuplicado)){
                                    $auxContOportunidade++;
                                }
                                array_push($arrRelatorioDuplicado,$dadosRelatorio->post_title);
                            } else {
                                $auxContOportunidade = 0;
                            }
                        }
                    }
                } 
                if(isset($auxContOportunidade)){
                    $listaOportunidade[$j] = $auxContOportunidade;
                }
                $j++;
            }
            $totalOportunidades=0;
            for($k=0;$k<sizeof($listaOportunidade);$k++){
                $totalOportunidades= $totalOportunidades + $listaOportunidade[$k];
            }
        }

        return view('ver-empresas',['dadosEmpresa'=>$dadosEmpresa,'qtEmpresas'=>$qtEmpresas,
        'porcentagemConcluido'=>$porcentagemConcluido,'oportunidades'=>$listaOportunidade,
        'totalOportunidades'=>$totalOportunidades]);
    }



    public function visualizar(){
        return view('empresa-visualizar');
    }
}
