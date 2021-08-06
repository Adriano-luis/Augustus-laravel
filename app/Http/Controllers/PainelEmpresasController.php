<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Empresa;
use App\Relatorio;

class PainelEmpresasController extends Controller
{
    public function index(){
        $empresas = Empresa::all();

        return view('painel.empresas-painel',['empresas'=>$empresas]);
    }

    public function excluir(Request $request){
        $excluir = Empresa::find($request->id);
        Relatorio::destroy($excluir->id);

        return redirect()->route('empresas-painel');
    }

    public function demo(Request $request){
        $id = $request->get('id');
        
        if ($id != '') {
             //Busca relatórios
            $listaRelatorio = array();
            $arrRelatorioDuplicado = array();
            $mysqli = DB::select('CALL SP_EXIBE_RELATORIO(?)', [$id]);
            if (sizeof($mysqli) > 0){
                foreach ($mysqli as $value){
                    $auxListaRelatorio[$id][]= $value->id_relatorio;
                }
            }else{
                $auxListaRelatorio[$id][] = '';
            }

            //Conta Oportunidades e qual o Relatório
            $listaRelatorio[$id]=$auxListaRelatorio[$id];
            $auxContRelatorio = sizeof($listaRelatorio[$id]);
            $auxContOportunidade = 0;
            if($auxContRelatorio > 0){
                for ( $i = 0; $i < $auxContRelatorio;$i++) {
                    $idRelatorio = $listaRelatorio[$id][$i];

                    $dadosRelatorio = Relatorio::Where('id',$idRelatorio)->get()->first();        
                    if($dadosRelatorio != ""){
                        if($dadosRelatorio->post_title != ""){
                            if(!in_array($dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt, $arrRelatorioDuplicado)){
                                $relatorio[$id][] = $dadosRelatorio;
                            }
                            array_push($arrRelatorioDuplicado,$dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt);
                        }
                    }
                } 
            }
        }
        return view('painel.empresas-demo-painel',['relatorios'=>$relatorio]);
       
    }
}
