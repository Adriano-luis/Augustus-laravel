<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Noticia;
use App\Noticia_Cliente;
use App\Empresa;
use App\Resposta;
use App\Pergunta;
use App\Resposta_formulario;
use App\Relatorio;
use App\classifica_relatorio;

class HomeController extends Controller
{
    public function index(Request $request){
        //Empresas
        $empresa = new Empresa();
        $listaEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->get();
        $qtEmpresas = sizeof($listaEmpresa);
        
        
        //Dados das empresas + filtro
        $ordem = $request->get('ordem');
        $nomeEmp = $request->get('pesquisa');
        if(isset($ordem) && $ordem != '' &&  isset($nomeEmp) && $nomeEmp != ''){
            $dadosEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])
            ->Where('nome','like','%'.$nomeEmp.'%')
            ->orderBy('nome',$ordem)->paginate(3);
        }else if(isset($ordem) && $ordem != ''){
            $dadosEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])
            ->orderBy('nome',$ordem)->paginate(3);
        }elseif(isset($nomeEmp) && $nomeEmp != ''){
            $dadosEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])
            ->Where('nome','like','%'.$nomeEmp.'%')->paginate(3);
        }else{
            $dadosEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->paginate(3);
        }
        

        //Noticias
        $cliente_noticia = $empresa->Where('id_cliente',$_SESSION['id'])->first();
        if($cliente_noticia){
            $noticias = Noticia_Cliente::join('noticias', 'noticia_cliente.id_noticia', '=', 'noticias.id')
            ->where('noticia_cliente.id_cliente',$cliente_noticia->id)->get(['id_noticia','noticias.post_title']);
        }
        if(sizeOf($noticias) <1){
            $noticias=Noticia::orderBy('post_date')->paginate(3);
        }
        
        
        //Porcentagem das Informações fornecidas
        $porcentagemConcluido = [];
        $auxContadorPergunta=Pergunta::all();
        $contadorPergunta = sizeof($auxContadorPergunta);
        $respostas_form = new Resposta_formulario() ;
        foreach($dadosEmpresa as $empresaId){
            $numRespostas = $respostas_form->where('id_formulario','=',$empresaId->id)->distinct()->count('id_pergunta');
            $porcentageminformacoes = ($numRespostas*100)/$contadorPergunta;
            array_push($porcentagemConcluido,$porcentageminformacoes);
        }

        if(isset($porcentagemConcluido) && $porcentagemConcluido != ''){
            $_SESSION['porcentagem'] = $porcentagemConcluido;
        }
        //Oportunidades
        if($qtEmpresas > 0){
            $j=0;
            $totalOportunidades=0;
            foreach($listaEmpresa as $empresaOp){
                
                //Busca relatórios
                $listaRelatorio = array();
                $arrRelatorioDuplicado = array();
                $mysqli = DB::select('CALL SP_EXIBE_RELATORIO(?)', [$empresaOp->id]);
                if (sizeof($mysqli) > 0){
                    foreach ($mysqli as $value){
                        $auxListaRelatorio[$empresaOp->nome][]= $value->id_relatorio;
                    }
                }else{
                    $auxListaRelatorio[$empresaOp->nome][] = '';
                }

                //Conta Oportunidades e qual o Relatório
                $listaRelatorio[$empresaOp->nome]=$auxListaRelatorio[$empresaOp->nome];
                $auxContRelatorio = sizeof($listaRelatorio[$empresaOp->nome]);
                $auxContOportunidade = 0;
                if($auxContRelatorio > 0){
                    for ( $i = 0; $i < $auxContRelatorio;$i++) {
                        $idRelatorio = $listaRelatorio[$empresaOp->nome][$i];
                        $dadosRelatorio = Relatorio::Where('id',$idRelatorio)->get()->first();

                        if($dadosRelatorio != ""){
                            if($dadosRelatorio->post_title != ""){
                                if(!in_array($dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt, $arrRelatorioDuplicado)){
                                    $auxContOportunidade++;
                                }
                                array_push($arrRelatorioDuplicado,$dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt);
                            } else {
                                $auxContOportunidade = 0;
                            }
                        }
                    }
                } 
                if(isset($auxContOportunidade)){
                    $listaOportunidade[$j] = $auxContOportunidade;
                    $totalOportunidades= $totalOportunidades + $auxContOportunidade;
                    $_SESSION['totOpt'] = $totalOportunidades;
                }
                $j++;
            }
        }
        
        if(isset($listaOportunidade) && $listaOportunidade != ''){
            $_SESSION['oportunidades'] = $listaOportunidade;
        } else{
            $listaOportunidade ='';
            $totalOportunidades = '0';
        }
        

        return view('home',['dadosEmpresa'=>$dadosEmpresa,'noticias'=>$noticias,'qtEmpresas'=>$qtEmpresas,
            'porcentagemConcluido'=>$porcentagemConcluido,'oportunidades'=>$listaOportunidade,
            'totalOportunidades'=>$totalOportunidades
        ]);
    }

    public function sobre(){
        return view('sobre');
    }

    public function editar(Request $request){
        $id = $request->get('empresa');
        $razaoSocial = $request->get('razao');
        $CNPJ = $request->get('cnpj');
        $ano = $request->get('ano');
        $sede = $request->get('cidade');
        $estados = $request->get('estado');
        $tipo = $request->get('societario');

        $empresa = new Empresa();
        $atualizar = $empresa->Where('id',$id)->Where('id_cliente',$_SESSION['id'])
        ->update(['nome'=>$razaoSocial,'cnpj'=>$CNPJ,'ano'=>$ano,
                'cidade'=>$sede,'estado'=>$estados,'tipo'=>$tipo]);

        return redirect()->route('home');
    }

    public function excluir(Request $request){
        $nome = $request->empresa_nome;

        $empresa = new Empresa();
        $excluir = $empresa->Where('nome',$nome)->Where('id_cliente',$_SESSION['id'])->get()->first();
        $empresa->destroy($excluir->id);

    }

    public function dashboard(Request $request){
        //Filtragem 
        $filtro = $request->all();
        $listaFiltros = array_filter($filtro);

        if($listaFiltros == ''){
            $listaFiltros = null;
        }

        //Empresas
        $empresa = new Empresa();
        $listaEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->get();
        $qtEmpresas = sizeof($listaEmpresa);
        
        //Dados das empresas
        $dadosEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->get();

        //Oportunidades
        if($qtEmpresas > 0){
            $j=0;
            foreach($listaEmpresa as $empresaOp){
                
                //Busca relatórios
                $listaRelatorio = array();
                $arrRelatorioDuplicado = array();
                $mysqli = DB::select('CALL SP_EXIBE_RELATORIO(?)', [$empresaOp->id]);
                if (sizeof($mysqli) > 0){
                    foreach ($mysqli as $value){
                        $auxListaRelatorio[$empresaOp->nome][]= $value->id_relatorio;
                    }
                }else{
                    $auxListaRelatorio[$empresaOp->nome][] = '';
                }

                //Conta Oportunidades e qual o Relatório
                $listaRelatorio[$empresaOp->nome]=$auxListaRelatorio[$empresaOp->nome];
                $auxContRelatorio = sizeof($listaRelatorio[$empresaOp->nome]);
                $auxContOportunidade = 0;
                if($auxContRelatorio > 0){
                    for ( $i = 0; $i < $auxContRelatorio;$i++) {
                        $idRelatorio = $listaRelatorio[$empresaOp->nome][$i];

                        $dadosRelatorio = Relatorio::Where('id',$idRelatorio)->get()->first();        
                        if($dadosRelatorio != ""){
                            if($dadosRelatorio->post_title != ""){
                                if(!in_array($dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt, $arrRelatorioDuplicado)){
                                    $relatorio[$empresaOp->nome][] = $dadosRelatorio;
                                }
                                array_push($arrRelatorioDuplicado,$dadosRelatorio->post_title."-".$dadosRelatorio->post_excerpt);
                            }
                        }
                    } 
                }
            }
            $chave = '';
            if(isset($filtro->empresa) && $filtro->empresa != null){
                foreach($listaFiltros as $key => $filtros){
                    if($chave == ''){
                        $chave = $key;
                    }
    
                    if($chave == $key){
                        for ($j=0; $j <sizeof($relatorio[$filtro->empresa]) ; $j++) {
                            if($relatorio[$filtro->empresa][$j]->$key == $filtros){
                                $lista1Filtro[$filtro->empresa][] = $relatorio[$filtro->empresa][$j];
                            }  
                        } 
                    }else{
                        if ($lista1Filtro[$nomeEmpresa] != '') {
                            for ($j=0; $j <sizeof($lista1Filtro[$nomeEmpresa]) ; $j++) {
                                if($lista1Filtro[$nomeEmpresa][$j]->$key == $filtros){
                                    $lista2Filtro[$nomeEmpresa][] = $lista1Filtro[$nomeEmpresa][$j];
                                }  
                            } 
                        }
                    }
                    $chave = $key;
                    
                }
            } else{
                foreach ($relatorio as $nomeEmpresa => $value) {
                    foreach($listaFiltros as $key => $filtros){
                        if($chave == ''){
                            $chave = $key;
                        }
        
                        if($chave == $key){
                            for ($j=0; $j <sizeof($relatorio[$nomeEmpresa]) ; $j++) {
                                if($relatorio[$nomeEmpresa][$j]->$key == $filtros){
                                    $lista1Filtro[$nomeEmpresa][] = $relatorio[$nomeEmpresa][$j];
                                }  
                            } 
                        }else{
                            for ($j=0; $j <sizeof($lista1Filtro[$nomeEmpresa]) ; $j++) {
                                if($lista1Filtro[$nomeEmpresa][$j]->$key == $filtros){
                                    $lista2Filtro[$nomeEmpresa][] = $lista1Filtro[$nomeEmpresa][$j];
                                }  
                            } 
                        }
                        $chave = $key;
                        
                    }
                }
            }

            $status = classifica_relatorio::all();
            if($listaFiltros != null){
                if(isset($lista2Filtro)){
                    return view('dashboard',['empresa'=>$listaEmpresa,'relatorios'=>$lista2Filtro,'status'=>$status,
                    'qt'=>$qtEmpresas]);
                }else if(isset($lista1Filtro)){
                    return view('dashboard',['empresa'=>$listaEmpresa,'relatorios'=>$lista1Filtro,'status'=>$status,
                    'qt'=>$qtEmpresas]);
                } else{
                    return view('dashboard',['empresa'=>$empresa,'relatorios'=>'','status'=>'']);
                }
            }

            return view('dashboard',['empresa'=>$listaEmpresa,'relatorios'=>$relatorio,'status'=>$status,
            'qt'=>$qtEmpresas]);            
        }
        return view('dashboard',['empresa'=>$empresa,'relatorios'=>'','status'=>'']);
    }

    public function dashboardPop(Request $request){
            $empresa = new Empresa();
            $listaEmpresa = $empresa->Where('id_cliente',$_SESSION['id'])->get();
        
            if (sizeof($listaEmpresa)> 0) {
                return json_encode($listaEmpresa);
            } else {
                return "error";
            } 
    }
}