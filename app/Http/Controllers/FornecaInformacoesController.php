<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Pergunta;
use App\Resposta;
use App\Resposta_formulario;

class FornecaInformacoesController extends Controller
{
    public function index(Request $request){
        if($request->get('id') != ''){
            $idEmpresa = $request->get('id');
            $cont = $request->get('cont');

            //procentagem e Oportunidades
            $porcentagem = $_SESSION['porcentagem'];
            $oportunidades = $_SESSION['oportunidades'];
            
            $empresa=Empresa::find($idEmpresa);
            $respostas=Resposta::all();
            $respostasEmpresa=Resposta_formulario::join('respostas', 'resposta_formulario.id_resposta', '=', 'respostas.id')
            ->where('id_formulario',$idEmpresa)->get(['id_resposta','respostas.post_title']);
            //$resposta = $respostas->where('id',311);
            //dd($respostasEmpresa);

            $perguntas=Pergunta::all();
            //$pergunta = $perguntas->where('id',341);
            //dd($pergunta);
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.ramo-de-atuacao',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function indexPost(Request $request){
            $idEmpresa = $request->empresa;
            $ramo1 = $request->respostasPage1;
            $ramo2 = $request->respostasPage2;
            $ramo3 = $request->respostasPage3;
            $ramo4 = $request->respostasPage4;

            if($ramo1 != ''){
                foreach($ramo1 as $registro){
                    Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>329,
                    'id_resposta'=>$registro]);    
    
                }
            }
            
            if($ramo2 != ''){
                foreach($ramo2 as $registro){
                    Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>313,
                    'id_resposta'=>$registro]);  
    
                }
            }
            
            if($ramo3 != ''){
                foreach($ramo3 as $registro){
                    Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>302,
                    'id_resposta'=>$registro]); 
    
                }
            }
            
            if($ramo4 != ''){
                foreach($ramo4 as $registro){
                    Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>341,
                    'id_resposta'=>$registro]); 
    
                }
            }
            
                        
    }

    public function tributacao(Request $request){
        if($request->get('id') != ''){
            $idEmpresa = $request->get('id');
            $cont = $request->get('cont');

            //procentagem e Oportunidades
            $porcentagem = $_SESSION['porcentagem'];
            $oportunidades = $_SESSION['oportunidades'];
            
            $empresa=Empresa::find($idEmpresa);

            $perguntas=Pergunta::all();
            $pergunta = $perguntas->where('id',242);
            dd($pergunta);
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.tributacao',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas]);
    }
}
