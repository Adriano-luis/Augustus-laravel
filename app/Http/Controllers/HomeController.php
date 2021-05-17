<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Noticia;
use App\Empresa;
use App\Resposta;
use App\Pergunta;

class HomeController extends Controller
{
    public function index(){
        $noticias=Noticia::orderBy('post_date')->paginate(3);


        $empresa = new Empresa();
        $qt = $empresa->Where('id_cliente',$_SESSION['id'])->get();
        $qtEmpresas = sizeof($qt);
        
        $dadosEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->paginate(3);

        $respostas = DB::table('resposta_formulario');
        $numRespostas = $respostas->where('id_formulario','=',$_SESSION['id'])->distinct()->count('id_pergunta');

        return view('home',['dadosEmpresa'=>$dadosEmpresa,'noticias'=>$noticias,'qtEmpresas'=>$qtEmpresas]);
    }

    
}
