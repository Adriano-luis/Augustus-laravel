<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Relatorio;

class PainelNoticiasController extends Controller
{
    public function index(){
        $noticias = Noticia::all();

        return view('painel.ver-noticias-painel',['noticias' =>$noticias]);
    }

    public function editar(Request $request){
        $editar = $request->id;

        return redirect()->route('incluir-noticias-painel',['noticia' => $editar]);
    }

    public function excluir(Request $request){
        $excluir = Noticia::find($request->id);
        Noticia::destroy($excluir->id);

        return redirect()->route('ver-noticias-painel');
    }

    public function novo(Request $request){
        if($request->noticia){
            $id = $request->noticia;
            $dados = Noticia::Where('ID',$id)->get()->first();

            return view('painel.incluir-noticias-painel',['dados' => $dados]);
        }else{
            return view('painel.incluir-noticias-painel');
        }
    }

    public function salvarNovo(Request $request){
        $id = $request->id;
        $titulo = $request->titulo;
        $descricao = $request->descricao;

        if($request->file('imagem')){
            $nome =strtolower('noticia.'). date("d/m/Y").$id;
            $extensao = $request->file('imagem')->extension();
            $fileName = "{$nome}.{$extensao}";
            
            $imgPerfil =$fileName;

            $upload = $request->file('imagem')->storeAs('noticias',$fileName);
        }

        if($id != ''){
            $verificar = Noticia::Where('ID',$id)->get()->first();
        }   
        
        if($verificar != ''){
            Noticia::Where('id',$id)->update([
                'post_title'              => $titulo,
                'post_content'           => $descricao,
                'guid'                => $imgPerfil
                
            ]);

            return redirect()->route('ver-noticias-painel',['mensagem' => 'Atualizado!']);
        }else{
            Noticia::create([
                'post_title'              => $titulo,
                'post_content'           => $descricao,
                'guid'                => $imgPerfil
            ]);

            return redirect()->route('ver-noticias-painel',['mensagem' => 'Criado!']);
        }
    }
}
