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

class HomeController extends Controller
{
    public function index(){
        $noticias=Noticia::orderBy('post_date')->paginate(3);


        $empresa = new Empresa();
        $qt = $empresa->Where('id_cliente',$_SESSION['id'])->get();
        $qtEmpresas = sizeof($qt);
        
        $dadosEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->paginate(3);

        $auxContadorPergunta=Pergunta::all();
        $contadorPergunta = sizeof($auxContadorPergunta);
        $respostas_form = new Resposta_formulario() ;
        $numRespostas = $respostas_form->where('id_formulario','=',$_SESSION['id'])->distinct()->count('id_pergunta');
        $porcentagemConcluido = ($numRespostas*100)/$contadorPergunta;

            /*
            $listaEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->get();
            if(sizeof($listaEmpresa) > 0){
                foreach($listaEmpresa as $dados){
                    
                    //Oportunidades
                    $listaRelatorio = array();
                    $arrRelatorioDuplicado = array();
                    
                    $mysqli = DB::select('CALL SP_EXIBE_RELATORIO(?)', array($dados->id));
                    dd($mysqli);
                    if ($mysqli){
                        while ($mysqli->more_results()) {
                            $mysqli->next_result();
                            if ($result = $mysqli->store_result()) {
                                while ($row = $result->fetch_row()) {
                                    $listaRelatorio[] = $row[0];
                                }
                                $result->free();
                            }
                        }
                    }
                    $mysqli->close();
                    $auxContRelatorio = sizeof($listaRelatorio);
                    $auxContOportunidade = 0;
                    if($auxContRelatorio > 0){
                        for ( $i = 0; $i < $auxContRelatorio;$i++) {
                            $idRelatorio = $listaRelatorio[$i];
                            $dadosRelatorio = get_post($idRelatorio);
                            if($dadosRelatorio->post_title != ""){
                                if(!in_array($dadosRelatorio->post_title, $arrRelatorioDuplicado)){
                                    $auxContOportunidade++;
                                }
                                array_push($arrRelatorioDuplicado,$dadosRelatorio->post_title);
                            }    
                        }
                    } else {
                        $auxContOportunidade = 0;
                    }
                }
            }*/


        return view('home',['dadosEmpresa'=>$dadosEmpresa,'noticias'=>$noticias,'qtEmpresas'=>$qtEmpresas,
            'porcentagemConcluido'=>$porcentagemConcluido
        ]);
    }

    
}
