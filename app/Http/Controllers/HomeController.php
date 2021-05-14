<?php

namespace App\Http\Controllers;
use App\Noticia;
use App\Empresa;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $empresa = new Empresa();
        $dadosEmpresa = $empresa->all()->toArray();
        
        return view('home',['dadosEmpresa'=>$dadosEmpresa]);
    }
}
