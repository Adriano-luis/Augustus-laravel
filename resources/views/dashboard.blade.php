@extends('layouts.basico')

@section('conteudo')
<section class="dashboard">
    <div class="container-fluid fundo">
        <div class="mix">
            <div class="row">
                <div class="col container-fluid">
                    <div class="empresas-cadastradas">
                        <div class="row">
                            <div class="title">
                                <h4>Empresas cadastradas</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 cadastradas empresas">
                                <div class="row">
                                    <img class="img-cadastradas" src="{{asset('/images/icon-Empresa.svg')}}">
                                    <h1>{{$qt}}</h1>
                                    <div class="info-cadastradas">
                                        Empresas cadastradas
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 cadastradas oportunidades">
                                <div class="row">
                                    <img class="img-geradas" src="{{asset('/images/icon-Estrela-Oportunidade.svg')}}">
                                    <h1>{{$_SESSION['totOpt']}}</h1>
                                    <div class="info-cadastradas">
                                        Oportunidades Geradas
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cadastrar">
                        <div class="row graficos">
                            <div class="col grafico">Estágio</div>
                            <div class="col grafico">Forma de Recuperação</div>
                            <div class="col grafico">Tributação</div>
                            <div class="col grafico">Probabilidade de Êxito</div>
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
                                        <img src="{{asset('/images/icon-Remota.svg')}}"><br>
                                        <span>Provável</span>
                                        @endif

                                        @if ($relatorio->probabilidade == 2)
                                        <img src="{{asset('/images/icon-Provavel.svg')}}"><br>
                                        <span>Possível</span>
                                        @endif

                                        @if ($relatorio->probabilidade == 3)
                                        <img src="{{asset('/images/icon-Possivel.svg')}}"><br>
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
                
        </div>
        <div class="paginacao">
        
        </div><br/><br/>
        <div class="marca">
            <img src="{{asset('/images/img-augustus-fundo.png')}}">
        </div>
    </div>
</section>
@endsection