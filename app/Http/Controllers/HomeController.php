<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Noticia;
use App\Empresa;

class HomeController extends Controller
{
    public function index(){
        $noticias=Noticia::orderBy('post_date')->paginate(3);


        $empresa = new Empresa();
        $dadosEmpresa = $empresa->paginate(3);

        
        
        return view('home',['dadosEmpresa'=>$dadosEmpresa,'noticias'=>$noticias]);
    }

    
}
