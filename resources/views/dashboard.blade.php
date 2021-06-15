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
                                    <h1>10</h1>
                                    <div class="info-cadastradas">
                                        Empresas cadastradas
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 cadastradas oportunidades">
                                <div class="row">
                                    <img class="img-geradas" src="{{asset('/images/icon-Estrela-Oportunidade.svg')}}">
                                    <h1>10</h1>
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
                        <div><img src="{{asset('/images/icon-Print.svg')}}">Imprimir</div>
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
            <div class="cartoes">
                
            </div>
        </div>
        <div class="paginacao">
        
        </div><br/><br/>
        <div class="marca">
            <img src="{{asset('/images/img-augustus-fundo.png')}}">
        </div>
    </div>
</section>
@endsection