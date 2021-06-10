<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class OportunidadesController extends Controller
{
    public function index(Request $request){
        $idEmpresa = $request->get('id');
        $cont = $request->get('cont');

        $empresa=Empresa::find($idEmpresa);
        $porcentagem = $_SESSION['porcentagem'];
        $oportunidades = $_SESSION['oportunidades'];

        return view('oportunidades',['empresa'=>$empresa,'porcentagem'=>$porcentagem[$cont],
        'oportunidades'=>$oportunidades[$cont],'cont'=>$cont]);
    }
}
