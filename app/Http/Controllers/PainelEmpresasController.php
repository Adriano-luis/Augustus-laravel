<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

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
}
