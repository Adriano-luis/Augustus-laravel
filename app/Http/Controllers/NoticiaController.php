<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Noticia_Cliente;
use App\Empresa;

class NoticiaController extends Controller
{
    public function index(){
        $cliente_noticia =Empresa::Where('id_cliente',$_SESSION['id'])->first();
        $noticias = Noticia_Cliente::join('noticias', 'noticia_cliente.id_noticia', '=', 'noticias.id')
        ->where('noticia_cliente.id_cliente',$cliente_noticia->id)->get(['id_noticia','noticias.post_title']);
        if(sizeOf($noticias) <1){
            $noticias=Noticia::orderBy('post_date')->paginate(9);
        }
        return view('noticias',['Noticias'=>$noticias]);
    }

    public function single(Request $request){
        if($request->get('id') != ''){
            $idNoticia = $request->get('id');

            $noticia = Noticia::Where('id',$idNoticia)->get();
            return view('noticia',['Noticia' => $noticia]);
        }else{
            return redirect()->route('noticias');
        }

        
    }
}
