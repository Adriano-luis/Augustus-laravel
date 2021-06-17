<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Empresa;
use App\Relatorio;

class OportunidadesController extends Controller
{
    public function index(Request $request){
        $idEmpresa = $request->get('id');
        $cont = $request->get('cont');

        $empresa=Empresa::find($idEmpresa);
        $porcentagem = $_SESSION['porcentagem'];
        $oportunidades = $_SESSION['oportunidades'];

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
                        if(!in_array($dadosRelatorio->post_title, $arrRelatorioDuplicado)){
                            $relatorio[] = $dadosRelatorio;
                        }
                        array_push($arrRelatorioDuplicado,$dadosRelatorio->post_title);
                    }
                }
            }

            return view('oportunidades',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
            'oportunidades'=>$oportunidades[$cont],'cont'=>$cont,'relatorios'=>$relatorio]);
        } 

        return view('oportunidades',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'cont'=>$cont,'relatorios'=>'']);
        
    }
}
