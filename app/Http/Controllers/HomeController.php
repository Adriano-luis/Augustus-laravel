<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Noticia;
use App\Empresa;
use App\Resposta;
use App\Pergunta;
use App\Resposta_formulario;
use App\Relatorio;

class HomeController extends Controller
{
    public function index(){
        $noticias=Noticia::orderBy('post_date')->paginate(3);


        $empresa = new Empresa();
        $qt = $empresa->Where('id_cliente',$_SESSION['id'])->get();
        $qtEmpresas = sizeof($qt);
        
        $dadosEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->paginate(3);

        $porcentagemConcluido = [];
        $auxContadorPergunta=Pergunta::all();
        $contadorPergunta = sizeof($auxContadorPergunta);
        $respostas_form = new Resposta_formulario() ;
        foreach($dadosEmpresa as $empresaId){
            $numRespostas = $respostas_form->where('id_formulario','=',$empresaId->id)->distinct()->count('id_pergunta');
            $porcentageminformacoes = ($numRespostas*100)/$contadorPergunta;
            array_push($porcentagemConcluido,$porcentageminformacoes);
        }

            
            $listaEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->get();
            if(sizeof($listaEmpresa) > 0){
                foreach($listaEmpresa as $dados){
                    
                    //Oportunidades
                    $listaRelatorio = array();
                    $arrRelatorioDuplicado = array();
                    $mysqli = DB::select('CALL SP_EXIBE_RELATORIO(?)', [$dados->id]);
                    if (sizeof($mysqli) > 0){
                        foreach ($mysqli as $value){
                            $listaRelatorio[] = $value->id_relatorio;
                        }
                    }
                    
                    $auxContRelatorio = sizeof($listaRelatorio);
                    $auxContOportunidade = 0;
                    if($auxContRelatorio > 0){
                        for ( $i = 0; $i < $auxContRelatorio;$i++) {
                            $idRelatorio = $listaRelatorio[$i];
                            $dadosRelatorio = Relatorio::find($idRelatorio);
                            echo "<pre>";
                            print_r ($dadosRelatorio);
                            echo "</pre>";
                            /*if($dadosRelatorio->post_title != ""){
                                if(!in_array($dadosRelatorio->post_title, $arrRelatorioDuplicado)){
                                    $auxContOportunidade++;
                                }
                                array_push($arrRelatorioDuplicado,$dadosRelatorio->post_title);
                            }  */  
                        }
                    } else {
                        $auxContOportunidade = 0;
                    }
                }
            }

        return view('home',['dadosEmpresa'=>$dadosEmpresa,'noticias'=>$noticias,'qtEmpresas'=>$qtEmpresas,
            'porcentagemConcluido'=>$porcentagemConcluido
        ]);
    }

    public function sobre(){
        return view('sobre');
    }

    
}
