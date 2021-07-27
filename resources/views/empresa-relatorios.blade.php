@extends('layouts.basico')

@section('conteudo')
<section class="empresa-relatorios">
    <div class="container-fluid fundo">
        <div class="mix">
            <div class="row-sm-8">
                <div class="col container-fluid">
                    <div class="empresas-visualizar">
                        <div class="row-sm-8" style="padding-top: 10px;">
                            <div class="col visualizar">
                                <div class="row">
                                    <img class="img-visualizar" src="{{asset('/images/icon-Empresa.svg')}}">
                                    <p>PERFIL DA EMPRESA</p>
                                    <h2>{{$empresa->nome}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="max-width: 1052px;margin-left:144px;">
                            <div class="col dados">
                                <div class="row titulo">
                                    <h6>Dados da empresa:</h6>
                                </div>
                                <div class="row dados-1">
                                    <div class="col titulo-info">
                                        <div>CNPJ:</div>
                                        <div class="conteudo-info">{{$empresa->cnpj}}</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Ano de constituição:</div>
                                        <div class="conteudo-info">{{$empresa->ano}}</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Cidade sede:</div>
                                        <div class="conteudo-info">{{$empresa->cidade}}</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Estados com filiais</div>
                                        <div class="conteudo-info">{{$empresa->estado}}</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Tipo Societário:</div>
                                        <div class="conteudo-info">{{$empresa->tipo}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relatorios">
            <div class="row topo-0">
                <div class="col-sm-10 titulo">
                    <h6>Selecione os filtros abaixo de acordo com aquilo que procura.</h6>
                </div>
                <div class="imprimir">
                    <div class="btn-imprimir">
                        <div onClick="window.print()" style="cursor: pointer;"><img src="{{asset('/images/icon-Print.svg')}}">Imprimir</div>
                    </div>
                </div>
            </div>
            <div class="row topo">
                <div class="col pesquisa">
                    <form action="{{route('relatorios')}}" method="GET">
                        @csrf
                        <input type="hidden" value="{{$empresa->id}}" name="id">
                        <input type="hidden" value="{{$cont}}" name="cont">
                        <select class="filtro filtro-3" name="estagio">
                            <option value="">Estágio</option>
                            <option value="7">Sem classificação</option>
                            <option value="1">Descartada</option>
                            <option value="2">Enviada</option>
                            <option value="3">Em espera</option>
                            <option value="4">Em análise</option>
                            <option value="5">Implementar</option>
                            <option value="6">Implementada</option>
                        </select>

                        <select class="filtro filtro-4" name="forma">
                            <option value="">Forma</option>
                            <option value="1">Administrativo</option>
                            <option value="2">Judicial</option>
                            <option value="3">Administrativo / Judicial</option>
                        </select>

                        <select class="filtro filtro-6" name="probabilidade">
                            <option value="">Probabilidade de Êxito</option>
                            <option value="1">Provável</option>
                            <option value="2">Possível</option>
                            <option value="3">Remota</option>
                        </select>

                        <select class="filtro filtro-5" name="tributacao">
                            <option value="">Tributação</option>
                            <option value="1">Federal</option>
                            <option value="2">Estadual</option>
                            <option value="3">Municipal</option>
                        </select>

                        <input type="submit" value="Filtrar">
                    </form>
                </div>
            </div>
            <?php $i = 0; ?>
            @if ($relatorios != '')
                @foreach ($relatorios as $nome => $v)
                    @if ($v != '')
                        @foreach ($v as $key => $relatorio)
                            <div class="cartoes">
                                <div class="row cartao">
                                    <div class="col-sm-5 opcoes">
                                        <div class="nome">
                                            <h1>{{$relatorio->post_title}}</h1>
                                            <h2>{{$nome}}</h2>
                                            <h2>{{$relatorio->post_excerpt}}</h2>
                                        </div>
                                        <div class="row estagio">
                                            <?php 
                                                $empresa = DB::table('empresas')->Where('nome',$nome)->get(['id']);
                                                
                                                $str = substr($empresa,8);
                                                $str = substr($str, 0,-3);
                                                $valorStatus = DB::table('classifica_relatorio')->join('relatorios', 'classifica_relatorio.id_relatorio', '=', 'relatorios.id')
                                                ->where('classifica_relatorio.id_empresa',$str)
                                                ->where('classifica_relatorio.id_relatorio',$relatorio->id)
                                                ->get(['classificacao']);
                                                $vsatus = substr($valorStatus,19);
                                                $valorStatus = substr($vsatus, 0,-3);
                                            ?>
                                            Estágio:
                                            <div class="estagio-info">
                                                <?php
                                                    if ($valorStatus == "1") {
                                                        echo 'Descartada';
                                                    }elseif ($valorStatus == "2") {
                                                        echo 'Enviada';
                                                    } elseif ($valorStatus == "3") {
                                                        echo 'Em espera';
                                                    }elseif ($valorStatus == "4") {
                                                        echo 'Em análise';
                                                    }elseif ($valorStatus == "5") {
                                                        echo 'Implementar';
                                                    }elseif ($valorStatus == "6") {
                                                        echo 'Implementada';
                                                    }elseif ($valorStatus == "7") {
                                                        echo 'Sem classificação';
                                                    }else {
                                                        echo 'Não definido';
                                                    }  
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row categorias">
                                        <div class="forma">
                                            <p>Forma de Recuperação</p>
                                            <div class="administrativo">
                                                @if ($relatorio->forma == 1)
                                                    <img src="{{asset('/images/icon-Administrativo.svg')}}"><br>
                                                    <span>Administrativo</span>
                                                @endif
                                                @if ($relatorio->forma == 2)
                                                    <img src="{{asset('/images/icon-Judicial.svg')}}"><br>
                                                    <span>Judicial</span>
                                                @endif
                                                @if ($relatorio->forma == 3)
                                                    <img src="{{asset('/images/icon-Administrativo-Judicial.svg')}}"><br>
                                                    <span>Administrativo / Judicial</span> 
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tributacao">
                                            <p>Tributação</p>
                                            <div class="tributacao">
                                                @if ($relatorio->tributacao == 1)
                                                    <img src="{{asset('/images/icon-Municipal.svg')}}"><br>
                                                    <span>Federal</span>
                                                @endif
        
                                                @if ($relatorio->tributacao == 2)
                                                    <img src="{{asset('/images/icon-Estadual.svg')}}"><br>
                                                    <span>Estadual</span>
                                                @endif
        
                                                @if ($relatorio->tributacao == 3)
                                                    <img src="{{asset('/images/icon-Federal.svg')}}"><br>
                                                    <span>Municipal</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="exito">
                                            <p>Probabilidade de Êxito</p>
                                            <div class="exito">
                                                @if ($relatorio->probabilidade == 1)
                                                <img src="{{asset('/images/icon-Possivel.svg')}}"><br> 
                                                <span>Provável</span>
                                            @endif
    
                                            @if ($relatorio->probabilidade == 2)
                                                <img src="{{asset('/images/icon-Provavel.svg')}}"><br>
                                                <span>Possível</span>
                                            @endif
    
                                            @if ($relatorio->probabilidade == 3)
                                                <img src="{{asset('/images/icon-Remota.svg')}}"><br>
                                                <span>Remota</span>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <?php $i++; ?>
                @endforeach
            @endif
        </div>
    </div>
</section>
@endsection