<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Empresa;
use App\Relatorio;
use App\Aproveitamento;
use App\classifica_relatorio;

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
                        if(!in_array($dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt, $arrRelatorioDuplicado)){
                            $relatorio[] = $dadosRelatorio;
                        }
                        array_push($arrRelatorioDuplicado,$dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt);
                    }
                }
            }

            $status = classifica_relatorio::all();
            $aproveitamentos = new Aproveitamento();

            return view('oportunidades',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
            'oportunidades'=>$oportunidades[$cont],'cont'=>$cont,'relatorios'=>$relatorio,'status'=>$status,
            'aproveitamentos' => $aproveitamentos]);
        } 

        return view('oportunidades',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'cont'=>$cont,'relatorios'=>'','status'=>'',
        'aproveitamentos' => '']);
        
    }

    public function indexPost(Request $request){
        if($request->status != ''){
            $empresa = $request->empresa_id;
            $relatorio = $request->relatorio_id;
            $classificacao = $request->status; 

            $existe = classifica_relatorio::Where('id_empresa',$empresa)->Where('id_relatorio',$relatorio)->Where('classificacao',$classificacao);

            if(!empty($existe)){
                classifica_relatorio::Where('id_empresa',$empresa)->Where('id_relatorio',$relatorio)
                ->update(['classificacao'=>$classificacao]);
            }else{
                classifica_relatorio::create(['id_empresa'=>$empresa,'id_relatorio'=>$relatorio,'classificacao'=>$classificacao]);
            }
        }
    }
}
