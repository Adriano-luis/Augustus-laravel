<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class VerEmpresasController extends Controller
{
    public function index(){
        $empresa = new Empresa();
        $qt = $empresa->Where('id_cliente',$_SESSION['id'])->get();
        $qtEmpresas = sizeof($qt);
        
        $dadosEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->paginate(3);

        return view('ver-empresas',['dadosEmpresa'=>$dadosEmpresa,'qtEmpresas'=>$qtEmpresas]);
    }
}
