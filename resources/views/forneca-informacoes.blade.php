@extends('layouts.basico')

@section('conteudo')
<section class="forneca">
    <div class="banner">
        <div class="row">
            <div class="col-sm-8 info">
                <h2><span class="titulo">Forneça informações</span> sobre a empresa</h2>
                <p>Nosso sistema gera relatórios que vão lhe permitir conhecer quais Oportunidades Tributárias,
                     tanto jurídicas como administrativas, que a sua empresa possui.</p>

                <p class="nome"><span>Informações da empresa:</span></p>
                <div class="empresa">{{$empresa->nome}}</div>
                <div class="row deg-fundo"></div>
                <div class="row teste2">
                    <div class="col-sm-5 info">
                        <div class="row dados">
                            <div class="porcentagem-info">
                                <h3 id="porcentagem">{{round($porcentagem)}}%</h3>
                            </div>
                            <div class="info-texto">
                                DAS INFORMAÇÕES<br/> FORNECIDAS
                            </div>
                        </div>
                        <div class="progress">
                            <div id="barra-0" class="progress-bar " role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-4 oportunidades">
                        <div class="row dados">
                            <img src="{{asset('/images/icon-Oportunidades.svg')}}">
                            <div class="porcentagem-opo">
                                <h3>{{$oportunidades}}</h3>
                            </div>
                            <div class="opo-texto">
                                OPORTUNIDADES<br/> GERADAS
                            </div>
                        </div>
                        <div class="ver"><a href="">Ver oportunidades geradas</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="{{asset('/images/img-Informacoes.png')}}" class="img-informacoes">
            </div>
            <div class="topico-1">
                <div class="dropdown dropright mar-1">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('/images/icon-Ramo-de-Atuacao.svg')}}" />Ramo de Atuação</a>
                    <div class="dropdown-menu menu-1">
                        <h3></h3>

                    </div>
                </div>
            </div>
            <div class="topico-2">
                <div class="dropdown dropright mar-2">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('/images/icon-Tributacao-HOVER.svg')}}" />Tributação</a>
                    <div class="dropdown-menu menu-2">

                    </div>
                </div>
            </div>
            <div class="topico-3">
                <div class="dropdown dropright mar-3">
                    <a href="#" class="dropdown-toggle drop-3" data-toggle="dropdown"><img src="{{asset('/images/icon-Num-Funcionarios.svg')}}" />Número de<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;funcionários</a>
                    <div class="dropdown-menu menu-3">
                    </div>
                </div>
            </div>
            <div class="topico-4">
                <div class="dropdown dropright mar-4">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('/images/icon-Previdencia.svg')}}" />Previdencia</a>
                    <div class="dropdown-menu menu-4">
                
                    </div>
                </div>
            </div>
            <div class="topico-5">
                <div class="dropdown dropright mar-5">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('/images/icon-Comercio-Exterior.svg')}}" />Comércio Exterior</a>
                    <div class="dropdown-menu menu-5">
                        
                    </div>
                </div>
            </div>
            <div class="topico-6">
                <div class="dropdown dropright mar-6">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('/images/icon-Relacionamento.svg')}}" />Relacionamento</a>
                    <div class="dropdown-menu menu-6">
                        
                    </div>
                </div>
            </div>
            <div class="topico-7">
                <div class="dropdown dropright mar-7">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('/images/icon-Outros.svg')}}" />Outros</a>
                    <div class="dropdown-menu menu-7">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fundo">
        
    </div>
</section>
@endsection
