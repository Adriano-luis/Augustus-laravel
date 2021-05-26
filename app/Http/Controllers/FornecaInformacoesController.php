<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Pergunta;

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
            
        }else{
            return redirect()->route('home');
        }

        return view('forneca-informacoes',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont]]);
    }
}
