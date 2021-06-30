<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Empresa;
use App\Resposta;
use App\Pergunta;
use App\Resposta_formulario;
use App\Relatorio;
use App\classifica_relatorio;

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
            $totalOportunidades=0;
            foreach($listaEmpresa as $empresaOp){
                
                //Busca relatórios
                $listaRelatorio = array();
                $arrRelatorioDuplicado = array();
                $mysqli = DB::select('CALL SP_EXIBE_RELATORIO(?)', [$empresaOp->id]);
                if (sizeof($mysqli) > 0){
                    foreach ($mysqli as $value){
                        $auxListaRelatorio[$empresaOp->nome][]= $value->id_relatorio;
                    }
                }else{
                    $auxListaRelatorio[$empresaOp->nome][] = '';
                }

                 //Conta Oportunidades e qual o Relatório
                 $listaRelatorio[$empresaOp->nome]=$auxListaRelatorio[$empresaOp->nome];
                 $auxContRelatorio = sizeof($listaRelatorio[$empresaOp->nome]);
                 $auxContOportunidade = 0;
                 if($auxContRelatorio > 0){
                     for ( $i = 0; $i < $auxContRelatorio;$i++) {
                         $idRelatorio = $listaRelatorio[$empresaOp->nome][$i];
                         $dadosRelatorio = Relatorio::Where('id',$idRelatorio)->get()->first();
 
                         if($dadosRelatorio != ""){
                             if($dadosRelatorio->post_title != ""){
                                 if(!in_array($dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt, $arrRelatorioDuplicado)){
                                     $auxContOportunidade++;
                                 }
                                 array_push($arrRelatorioDuplicado,$dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt);
                             } else {
                                 $auxContOportunidade = 0;
                             }
                         }
                     }
                 } 
                if(isset($auxContOportunidade)){
                    $listaOportunidade[$j] = $auxContOportunidade;
                    $totalOportunidades= $totalOportunidades + $auxContOportunidade;
                }
                $j++;
            }
        }
        
        if(isset($listaOportunidade) && $listaOportunidade != ''){
            $_SESSION['oportunidades'] = $listaOportunidade;
        } else{
            $listaOportunidade ='';
            $totalOportunidades = '0';
        }

        return view('ver-empresas',['dadosEmpresa'=>$dadosEmpresa,'qtEmpresas'=>$qtEmpresas,
        'porcentagemConcluido'=>$porcentagemConcluido,'oportunidades'=>$listaOportunidade,
        'totalOportunidades'=>$totalOportunidades]);
    }



    public function visualizar(Request $request){
        $idEmpresa = $request->get('id');
        $cont = $request->get('cont');

        $empresa=Empresa::find($idEmpresa);
        $porcentagem = $_SESSION['porcentagem'];
        $oportunidades = $_SESSION['oportunidades'];

        $respostasEmpresa=Resposta_formulario::join('respostas', 'resposta_formulario.id_resposta', '=', 'respostas.id')
        ->join('perguntas', 'resposta_formulario.id_pergunta', '=', 'perguntas.id')
        ->where('id_formulario',$idEmpresa)->get(['respostas.post_title','id_pergunta']);
        $perguntas=Pergunta::all();

        //Busca relatórios
        $listaRelatorio = array();
        $arrRelatorioDuplicado = array();
        $mysqli = DB::select('CALL SP_EXIBE_RELATORIO(?)', [$empresa->id]);
        if (sizeof($mysqli) > 0){
            foreach ($mysqli as $value){
                $auxListaRelatorio[] = $value->id_relatorio;
            }
        }else{
            $auxListaRelatorio = array();
        }

        //Conta Oportunidades e qual o Relatório
        $listaRelatorio[$empresa->nome]=$auxListaRelatorio;
        $auxContRelatorio = sizeof($listaRelatorio[$empresa->nome]);
        $auxContOportunidade = 0;
        if($auxContRelatorio > 0){
            for ( $i = 0; $i < $auxContRelatorio;$i++) {
                $idRelatorio = $listaRelatorio[$empresa->nome][$i];
                $dadosRelatorio = Relatorio::Where('id',$idRelatorio)->get()->first();

                if($dadosRelatorio != ""){
                    if($dadosRelatorio->post_title != ""){
                        if(!in_array($dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt, $arrRelatorioDuplicado)){
                            $relatorio[] = $dadosRelatorio;
                        }
                        array_push($arrRelatorioDuplicado,$dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt);
                    }
                }
            }

            return view('empresa-visualizar',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
            'oportunidades'=>$oportunidades[$cont],'cont'=>$cont,'relatorios'=>$relatorio,
            'perguntas'=>$perguntas,'respostas'=>$respostasEmpresa]);
        } 

        return view('empresa-visualizar',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'cont'=>$cont,'relatorios'=>'',
        'perguntas'=>$perguntas,'respostas'=>$respostasEmpresa]);
        
    }

    public function relatorios(Request $request){
        $idEmpresa = $request->get('id');
        $cont = $request->get('cont');

        $empresa=Empresa::find($idEmpresa);
        $porcentagem = $_SESSION['porcentagem'];
        $oportunidades = $_SESSION['oportunidades'];

         //Oportunidades
         if($idEmpresa){
            $j=0;
             
            //Busca relatórios
            $listaRelatorio = array();
            $arrRelatorioDuplicado = array();
            $mysqli = DB::select('CALL SP_EXIBE_RELATORIO(?)', [$empresa->id]);
            if (sizeof($mysqli) > 0){
                foreach ($mysqli as $value){
                    $auxListaRelatorio[$empresa->nome][]= $value->id_relatorio;
                }
            }else{
                $auxListaRelatorio[$empresa->nome][] = '';
            }

            //Conta Oportunidades e qual o Relatório
            $listaRelatorio[$empresa->nome]=$auxListaRelatorio[$empresa->nome];
            $auxContRelatorio = sizeof($listaRelatorio[$empresa->nome]);
            $auxContOportunidade = 0;
            if($auxContRelatorio > 0){
                for ( $i = 0; $i < $auxContRelatorio;$i++) {
                    $idRelatorio = $listaRelatorio[$empresa->nome][$i];
                    $dadosRelatorio = Relatorio::Where('id',$idRelatorio)->get()->first();
    
                    if($dadosRelatorio != ""){
                        if($dadosRelatorio->post_title != ""){
                            if(!in_array($dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt, $arrRelatorioDuplicado)){
                                $relatorio[$empresa->nome][] = $dadosRelatorio;
                            }
                            array_push($arrRelatorioDuplicado,$dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt);
                        }
                    }
                }
                if(isset($relatorio)){
                    return view('empresa-relatorios',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
                    'oportunidades'=>$oportunidades[$cont],'cont'=>$cont,'relatorios'=>$relatorio]);
                }else{
                    return view('empresa-relatorios',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
                    'oportunidades'=>$oportunidades[$cont],'cont'=>$cont,'relatorios'=>'']);
                }
                
            }
        } 

        return view('empresa-relatorios',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'cont'=>$cont,'relatorios'=>'']);
        
    }
}
