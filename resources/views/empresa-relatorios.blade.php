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
                                        <div>Ano de Constituição:</div>
                                        <div class="conteudo-info">{{$empresa->ano}}</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Cidade Sede:</div>
                                        <div class="conteudo-info">{{$empresa->cidade}}</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Estados com Filiais</div>
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
                    <form>
                       <select class="filtro filtro-1"  name="">
                           <option>Empresa</option>
                       </select>

                       <select class="filtro filtro-2" name="">
                            <option>Oportunidade</option>
                        </select>

                        <select class="filtro filtro-3" name="">
                            <option>Estágio</option>
                        </select>

                        <select class="filtro filtro-4" name="">
                            <option>Forma</option>
                        </select>

                        <select class="filtro filtro-5" name="">
                            <option>Tributação</option>
                        </select>

                        <select class="filtro filtro-6" name="">
                            <option>Probabilidade de Êxito</option>
                        </select>

                        <input type="submit" value="Filtrar">
                    </form>
                </div>
            </div>
            <?php $i = 0; ?>
            @if ($relatorios != '')
                @foreach ($relatorios as $v)
                    @if ($v != '')
                        @foreach ($v as $relatorio)
                            <div class="cartoes">
                                <div class="row cartao">
                                    <div class="col-sm-5 opcoes">
                                        <div class="nome">
                                            <h1>{{$relatorio->post_title}}</h1>
                                            <h2>{{key($relatorios)}}</h2>
                                            <h2>{{$relatorio->post_excerpt}}</h2>
                                        </div>
                                        <div class="row estagio">
                                            <?php
                                                /* foreach ($status as $x) {
                                                    $empresa = DB::table('empresas')->Where('nome',key($relatorios))->get(['id']);
                                                    $valorStatus = DB::table('classifica_relatorio')->join('relatorio', 'classifica_relatorio.id_relatorio', '=', ' relatorios.id')
                                                    ->where('classifica_relatorio.id_empresa',$empresa)
                                                    ->get(['classificacao']);
                                                }*/
                                            ?>
                                            Estágio:<div class="estagio-info"></div>
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
                                                <span>Municipal</span>
                                                @endif

                                                @if ($relatorio->tributacao == 2)
                                                <img src="{{asset('/images/icon-Estadual.svg')}}"><br>
                                                <span>Estadual</span>
                                                @endif

                                                @if ($relatorio->tributacao == 3)
                                                <img src="{{asset('/images/icon-Federal.svg')}}"><br>
                                                <span>Federal</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="exito">
                                            <p>Probabilidade de Êxito</p>
                                            <div class="exito">
                                                @if ($relatorio->probabilidade == 1)
                                                <img src="{{asset('/images/icon-Remota.svg')}}"><br>
                                                <span>Remota</span>
                                                @endif

                                                @if ($relatorio->probabilidade == 2)
                                                <img src="{{asset('/images/icon-Provavel.svg')}}"><br>
                                                <span>Provável</span>
                                                @endif

                                                @if ($relatorio->probabilidade == 3)
                                                <img src="{{asset('/images/icon-Possivel.svg')}}"><br>
                                                <span>Possível</span>
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