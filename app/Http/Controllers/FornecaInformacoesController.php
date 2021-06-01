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
            $_SESSION['idEmpresa'] = $request->get('id');
            $_SESSION['cont'] = $request->get('cont');

            $idEmpresa = $_SESSION['idEmpresa'];
            $cont = $_SESSION['cont'];

            //procentagem e Oportunidades
            $porcentagem = $_SESSION['porcentagem'];
            $oportunidades = $_SESSION['oportunidades'];
            
            $empresa=Empresa::find($_SESSION['idEmpresa']);
            $respostas=Resposta::all();
            $respostasEmpresa=Resposta_formulario::join('respostas', 'resposta_formulario.id_resposta', '=', 'respostas.id')
            ->where('id_formulario',$_SESSION['idEmpresa'])->get(['id_resposta','respostas.post_title']);
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
            $idEmpresa = $_SESSION['idEmpresa'];
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
            $idEmpresa = $_SESSION['idEmpresa'];
            $cont = $_SESSION['cont'];

            //procentagem e Oportunidades
            $porcentagem = $_SESSION['porcentagem'];
            $oportunidades = $_SESSION['oportunidades'];
            
            $empresa=Empresa::find($idEmpresa);
            $respostas=Resposta::all();
            $respostasEmpresa=Resposta_formulario::join('respostas', 'resposta_formulario.id_resposta', '=', 'respostas.id')
            ->where('id_formulario',$_SESSION['idEmpresa'])->get(['id_resposta','respostas.post_title']);
            //$resposta = $respostas->where('id',362);
            //dd($resposta);

            $perguntas=Pergunta::all();
            //$pergunta = $perguntas->where('id',387);
            //dd($pergunta);
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.tributacao',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function tributacaoPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
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
    
                
    }


    public function numeroDeFuncionarios(Request $request){
        if($request->get('id') != ''){
            $idEmpresa = $_SESSION['idEmpresa'];
            $cont = $_SESSION['cont'];

            //procentagem e Oportunidades
            $porcentagem = $_SESSION['porcentagem'];
            $oportunidades = $_SESSION['oportunidades'];
            
            $empresa=Empresa::find($idEmpresa);
            $respostas=Resposta::all();
            $respostasEmpresa=Resposta_formulario::join('respostas', 'resposta_formulario.id_resposta', '=', 'respostas.id')
            ->where('id_formulario',$_SESSION['idEmpresa'])->get(['id_resposta','respostas.post_title']);
            //$resposta = $respostas->where('id',243);
            //dd($resposta);

            $perguntas=Pergunta::all();
            //$pergunta = $perguntas->where('id',785);
            //dd($pergunta);
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.numero-de-funcionarios',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function numeroDeFuncionariosPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
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
    
                
    }


    public function previdencia(Request $request){
        if($request->get('id') != ''){
            $idEmpresa = $_SESSION['idEmpresa'];
            $cont = $_SESSION['cont'];

            //procentagem e Oportunidades
            $porcentagem = $_SESSION['porcentagem'];
            $oportunidades = $_SESSION['oportunidades'];
            
            $empresa=Empresa::find($idEmpresa);
            $respostas=Resposta::all();
            $respostasEmpresa=Resposta_formulario::join('respostas', 'resposta_formulario.id_resposta', '=', 'respostas.id')
            ->where('id_formulario',$_SESSION['idEmpresa'])->get(['id_resposta','respostas.post_title']);
            //$resposta = $respostas->where('id',243);
            //dd($resposta);

            $perguntas=Pergunta::all();
            //$pergunta = $perguntas->where('id',785);
            //dd($pergunta);
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.previdencia',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function previdenciaPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
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
    
                
    }

    public function comercioExterior(Request $request){
        if($request->get('id') != ''){
            $idEmpresa = $_SESSION['idEmpresa'];
            $cont = $_SESSION['cont'];

            //procentagem e Oportunidades
            $porcentagem = $_SESSION['porcentagem'];
            $oportunidades = $_SESSION['oportunidades'];
            
            $empresa=Empresa::find($idEmpresa);
            $respostas=Resposta::all();
            $respostasEmpresa=Resposta_formulario::join('respostas', 'resposta_formulario.id_resposta', '=', 'respostas.id')
            ->where('id_formulario',$_SESSION['idEmpresa'])->get(['id_resposta','respostas.post_title']);
            //$resposta = $respostas->where('id',243);
            //dd($resposta);

            $perguntas=Pergunta::all();
            //$pergunta = $perguntas->where('id',785);
            //dd($pergunta);
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.comercio-exterior',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function comercioExteriorPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
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
    
                
    }

    public function relacionamento(Request $request){
        if($request->get('id') != ''){
            $idEmpresa = $_SESSION['idEmpresa'];
            $cont = $_SESSION['cont'];

            //procentagem e Oportunidades
            $porcentagem = $_SESSION['porcentagem'];
            $oportunidades = $_SESSION['oportunidades'];
            
            $empresa=Empresa::find($idEmpresa);
            $respostas=Resposta::all();
            $respostasEmpresa=Resposta_formulario::join('respostas', 'resposta_formulario.id_resposta', '=', 'respostas.id')
            ->where('id_formulario',$_SESSION['idEmpresa'])->get(['id_resposta','respostas.post_title']);
            //$resposta = $respostas->where('id',243);
            //dd($resposta);

            $perguntas=Pergunta::all();
            //$pergunta = $perguntas->where('id',785);
            //dd($pergunta);
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.relacionamento',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function relacionamentoPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
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
    
                
    }

    public function outros(Request $request){
        if($request->get('id') != ''){
            $idEmpresa = $_SESSION['idEmpresa'];
            $cont = $_SESSION['cont'];

            //procentagem e Oportunidades
            $porcentagem = $_SESSION['porcentagem'];
            $oportunidades = $_SESSION['oportunidades'];
            
            $empresa=Empresa::find($idEmpresa);
            $respostas=Resposta::all();
            $respostasEmpresa=Resposta_formulario::join('respostas', 'resposta_formulario.id_resposta', '=', 'respostas.id')
            ->where('id_formulario',$_SESSION['idEmpresa'])->get(['id_resposta','respostas.post_title']);
            //$resposta = $respostas->where('id',243);
            //dd($resposta);

            $perguntas=Pergunta::all();
            //$pergunta = $perguntas->where('id',785);
            //dd($pergunta);
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.outros',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function outrosPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
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
    
                
    }
}