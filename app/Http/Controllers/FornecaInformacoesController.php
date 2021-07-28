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
            //$resposta = $respostas->where('id',792);
            //dd($resposta);

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
                $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',329)->get();

                if($respostasAnterior != ''){
                    $aux = 0;
                    $aux2 = 0;
                    foreach($ramo1 as $registro){
                        if(isset($respostasAnterior[$aux]->id_resposta_formulario)){
                            Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior[$aux]->id_resposta_formulario)
                            ->update(['id_formulario'=>$idEmpresa,'id_pergunta'=>329,
                            'id_resposta'=>$registro]); 
                        }else{
                            Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>329,
                            'id_resposta'=>$registro]);
                        }
                        $aux++;
                    }
                    foreach ($respostasAnterior as $ra) {
                        if(isset($ramo1[$aux2]) && $ra->id_resposta == $ramo1[$aux2]){
                            $aux2++;
                        }else{
                            Resposta_formulario::Where('id_resposta_formulario',$ra->id_resposta_formulario)
                            ->delete();
                            $aux2++;
                        }
                    }
                }else{
                    foreach($ramo1 as $registro){
                        Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>329,
                        'id_resposta'=>$registro]);    
        
                    }
                }
               
            }
            
            if($ramo2 != ''){
                $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                                    ->Where('id_pergunta',313)->get();
                                    
                if($respostasAnterior != ''){
                    $aux = 0;
                    $aux2 = 0;
                    foreach($ramo2 as $registro){
                        if(isset($respostasAnterior[$aux]->id_resposta_formulario)){
                            Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior[$aux]->id_resposta_formulario)
                            ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>313,
                            'id_resposta'=>$registro]);  
                        }else{
                            Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>313,
                            'id_resposta'=>$registro]);  
                        }
                        $aux++;
                    }
                    foreach ($respostasAnterior as $ra) {
                        if(isset($ramo2[$aux2]) && $ra->id_resposta == $ramo2[$aux2]){
                            $aux2++;
                        }else{
                            Resposta_formulario::Where('id_resposta_formulario',$ra->id_resposta_formulario)
                            ->delete();
                            $aux2++;
                        }
                    }
                }else{
                    foreach($ramo2 as $registro){
                        Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>313,
                        'id_resposta'=>$registro]);  
                    }
                }
               
            }
            
            if($ramo3 != ''){
                $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                                    ->Where('id_pergunta',302)->get();
                                    
                if($respostasAnterior != ''){
                    $aux = 0;
                    $aux2 = 0;
                    foreach($ramo3 as $registro){
                        if(isset($respostasAnterior[$aux]->id_resposta_formulario)){
                            Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior[$aux]->id_resposta_formulario)
                            ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>302,
                            'id_resposta'=>$registro]); 
                        }else{
                            Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>302,
                            'id_resposta'=>$registro]); 
                        }
                        $aux++;
                    }
                    foreach ($respostasAnterior as $ra) {
                        if(isset($ramo3[$aux2]) && $ra->id_resposta == $ramo3[$aux2]){
                            $aux2++;
                        }else{
                            Resposta_formulario::Where('id_resposta_formulario',$ra->id_resposta_formulario)
                            ->delete();
                            $aux2++;
                        }
                    }
                }else{
                    foreach($ramo3 as $registro){
                        Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>302,
                        'id_resposta'=>$registro]); 
                    }
                }
                
            }
            
            if($ramo4 != ''){
                $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                                    ->Where('id_pergunta',341)->get();
                                    
                if($respostasAnterior != ''){
                    $aux = 0;
                    $aux2 = 0;
                    foreach($ramo4 as $registro){
                        if(isset($respostasAnterior[$aux]->id_resposta_formulario)){
                            Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior[$aux]->id_resposta_formulario)
                            ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>341,
                            'id_resposta'=>$registro]); 
                        }else{
                            Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>341,
                            'id_resposta'=>$registro]); 
                        }
                        $aux++;
                    }
                    foreach ($respostasAnterior as $ra) {
                        if(isset($ramo4[$aux2]) && $ra->id_resposta == $ramo4[$aux2]){
                            $aux2++;
                        }else{
                            Resposta_formulario::Where('id_resposta_formulario',$ra->id_resposta_formulario)
                            ->delete();
                            $aux2++;
                        }
                    }
                }else{
                    foreach($ramo4 as $registro){
                        Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>341,
                        'id_resposta'=>$registro]); 
                    }
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
            $perguntas=Pergunta::all();
            //$resposta = $respostas->where('id',1247);
            //dd($resposta);
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.tributacao',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function tributacaoPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
        $ramo1_1 = $request->respostas1Page1;
        $ramo1_2 = $request->respostas2Page1;
        $ramo1_3 = $request->respostas3Page1;
        $ramo1_4 = $request->respostas4Page1;
        $ramo2_1 = $request->respostas1Page2;
        $ramo2_2 = $request->respostas2Page2;
        $ramo2_3 = $request->respostas3Page2;

        if($ramo1_1 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',242)->get()->first();
                                    
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>242,
                'id_resposta'=>$ramo1_1]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>242,
                'id_resposta'=>$ramo1_1]);
            }
        }

        if($ramo1_2 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',352)->get()->first();
                                    
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>352,
                'id_resposta'=>$ramo1_2]);   
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>352,
                'id_resposta'=>$ramo1_2]);   
            }
             
        }

        if($ramo1_3 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',455)->get()->first();
                                    
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>455,
                'id_resposta'=>$ramo1_3]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>455,
                'id_resposta'=>$ramo1_3]);
            }
        }

        if($ramo1_4 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',785)->get()->first();
                                    
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>785,
                'id_resposta'=>$ramo1_4]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>785,
                'id_resposta'=>$ramo1_4]);
            }
        }
        
        if($ramo2_1 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',830)->get()->first();
                                    
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>830,
                'id_resposta'=>$ramo2_1]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>830,
                'id_resposta'=>$ramo2_1]);  
            }
        }  

        if($ramo2_2 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',821)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>821,
                'id_resposta'=>$ramo2_2]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>821,
                'id_resposta'=>$ramo2_2]);  
            }
        }  

        if($ramo2_3 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',416)->get()->first();
                                    
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>416,
                'id_resposta'=>$ramo2_3]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>416,
                'id_resposta'=>$ramo2_3]);
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

            $perguntas=Pergunta::all();
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.numero-de-funcionarios',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function numeroDeFuncionariosPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
        $ramo1 = $request->respostasPage;

        if($ramo1 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',357)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>357,
                'id_resposta'=>$ramo1]);    
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>357,
                'id_resposta'=>$ramo1]);    
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

            $perguntas=Pergunta::all();
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.previdencia',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function previdenciaPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
        $ramo1_1 = $request->respostas1Page1;
        $ramo1_2 = $request->respostas2Page1;
        $ramo1_3 = $request->respostas3Page1;
        $ramo1_4 = $request->respostas4Page1;
        $ramo2_1 = $request->respostas1Page2;
        $ramo2_2 = $request->respostas2Page2;
        $ramo2_3 = $request->respostas3Page2;
        $ramo2_4 = $request->respostas4Page2;

        if($ramo1_1 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',374)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>374,
                'id_resposta'=>$ramo1_1]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>374,
                'id_resposta'=>$ramo1_1]);
            }
        }

        if($ramo1_2 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',268)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>268,
                'id_resposta'=>$ramo1_2]);   
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>268,
                'id_resposta'=>$ramo1_2]);   
            } 
        }

        if($ramo1_3 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',836)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>836,
                'id_resposta'=>$ramo1_3]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>836,
                'id_resposta'=>$ramo1_3]);
            }
        }

        if($ramo1_4 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',794)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>794,
                'id_resposta'=>$ramo1_4]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>794,
                'id_resposta'=>$ramo1_4]);
            }
        }
        
        if($ramo2_1 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',251)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>251,
                'id_resposta'=>$ramo2_1]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>251,
                'id_resposta'=>$ramo2_1]);  
            }
        }  

        if($ramo2_2 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',370)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>370,
                'id_resposta'=>$ramo2_2]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>370,
                'id_resposta'=>$ramo2_2]);  
            }
        }  

        if($ramo2_3 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',365)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>365,
                'id_resposta'=>$ramo2_3]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>365,
                'id_resposta'=>$ramo2_3]);  
            }
        }  

        if($ramo2_4 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',297)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>297,
                'id_resposta'=>$ramo2_4]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>297,
                'id_resposta'=>$ramo2_4]);  
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

            $perguntas=Pergunta::all();
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.comercio-exterior',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function comercioExteriorPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
        $ramo1_1 = $request->respostas1Page1;
        $ramo1_2 = $request->respostas2Page1;

        if($ramo1_1 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',382)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>382,
                'id_resposta'=>$ramo1_1]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>382,
                'id_resposta'=>$ramo1_1]);
            }
        }

        if($ramo1_2 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',281)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>281,
                'id_resposta'=>$ramo1_2]);    
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>281,
                'id_resposta'=>$ramo1_2]);    
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

            $perguntas=Pergunta::all();
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.relacionamento',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function relacionamentoPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
        $ramo1_1 = $request->respostas1Page1;
        $ramo1_2 = $request->respostas2Page1;
        $ramo1_3 = $request->respostas3Page1;
        $ramo1_4 = $request->respostas4Page1;
        $ramo2_1 = $request->respostas1Page2;
        $ramo2_2 = $request->respostas2Page2;

        if($ramo1_1 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',246)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>246,
                'id_resposta'=>$ramo1_1]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>246,
                'id_resposta'=>$ramo1_1]);
            }
        }

        if($ramo1_2 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',404)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>404,
                'id_resposta'=>$ramo1_2]);    
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>404,
                'id_resposta'=>$ramo1_2]);    
            }
        }

        if($ramo1_3 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',401)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>401,
                'id_resposta'=>$ramo1_3]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>401,
                'id_resposta'=>$ramo1_3]);
            }
        }

        if($ramo1_4 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',398)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>398,
                'id_resposta'=>$ramo1_4]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>398,
                'id_resposta'=>$ramo1_4]);
            }
        }
        
        if($ramo2_1 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',407)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>407,
                'id_resposta'=>$ramo2_1]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>407,
                'id_resposta'=>$ramo2_1]);  
            }
        }  

        if($ramo2_2 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',393)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>393,
                'id_resposta'=>$ramo2_2]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>393,
                'id_resposta'=>$ramo2_2]);  
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
            ->where('id_formulario',$_SESSION['idEmpresa'])->distinct()->get(['id_resposta','respostas.post_title']);

            $perguntas=Pergunta::all();
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes.outros',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'perguntas'=>$perguntas,'respostas'=>$respostas,
        'respostasEmpresa'=>$respostasEmpresa]);
    }

    public function outrosPost(Request $request){
        $idEmpresa = $_SESSION['idEmpresa'];
        $ramo1_1 = $request->respostas1Page1;
        $ramo1_2 = $request->respostas2Page1;
        $ramo1_3 = $request->respostas3Page1;
        $ramo1_4 = $request->respostas4Page1;
        $ramo2_1 = $request->respostas1Page2;
        $ramo2_2 = $request->respostas2Page2;
        $ramo2_3 = $request->respostas3Page2;
        $ramo2_4 = $request->respostas4Page2;
        $ramo3_1 = $request->respostas1Page3;
        $ramo3_2 = $request->respostas2Page3;
        $ramo3_3 = $request->respostas3Page3;

        if($ramo1_1 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',825)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>825,
                'id_resposta'=>$ramo1_1]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>825,
                'id_resposta'=>$ramo1_1]);
            }
        }

        if($ramo1_2 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',452)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>452,
                'id_resposta'=>$ramo1_2]);    
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>452,
                'id_resposta'=>$ramo1_2]);    
            }
        }

        if($ramo1_3 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',446)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>446,
                'id_resposta'=>$ramo1_3]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>446,
                'id_resposta'=>$ramo1_3]);
            }
        }

        if($ramo1_4 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',440)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>440,
                'id_resposta'=>$ramo1_4]);
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>440,
                'id_resposta'=>$ramo1_4]);
            }
        }
        
        if($ramo2_1 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',437)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>437,
                'id_resposta'=>$ramo2_1]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>437,
                'id_resposta'=>$ramo2_1]);  
            }
        }  

        if($ramo2_2 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',434)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>434,
                'id_resposta'=>$ramo2_2]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>434,
                'id_resposta'=>$ramo2_2]);  
            }
        }  

        if($ramo2_3 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',431)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>431,
                'id_resposta'=>$ramo2_3]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>431,
                'id_resposta'=>$ramo2_3]);  
            }
        }

        if($ramo2_4 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',424)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>424,
                'id_resposta'=>$ramo2_4]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>424,
                'id_resposta'=>$ramo2_4]);  
            }
        }

        if($ramo3_1 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',428)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>428,
                'id_resposta'=>$ramo3_1]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>428,
                'id_resposta'=>$ramo3_1]);    
            }
        }  

        if($ramo3_2 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',421)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>421,
                'id_resposta'=>$ramo3_2]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>421,
                'id_resposta'=>$ramo3_2]);   
            }
        }  

        if($ramo3_3 != ''){
            $respostasAnterior = Resposta_formulario::Where('id_formulario',$idEmpresa)
                ->Where('id_pergunta',387)->get()->first();
                
            if($respostasAnterior != ''){
                Resposta_formulario::Where('id_resposta_formulario',$respostasAnterior->id_resposta_formulario)
                ->update(['id_formulario' =>$idEmpresa,'id_pergunta'=>387,
                'id_resposta'=>$ramo3_3]);  
            }else{
                Resposta_formulario::create(['id_formulario' =>$idEmpresa,'id_pergunta'=>387,
                'id_resposta'=>$ramo3_3]);  
            }
        }  
    
                
    }
}
