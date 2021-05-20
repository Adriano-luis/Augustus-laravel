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
                <div class="empresa">Empresa</div>
                <div class="row deg-fundo"></div>
                <div class="row teste2">
                    <div class="col-sm-5 info">
                        <div class="row dados">
                            <div class="porcentagem-info">
                                <h3>10%</h3>
                            </div>
                            <div class="info-texto">
                                DAS INFORMAÇÕES<br/> FORNECIDAS
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar color" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-4 oportunidades">
                        <div class="row dados">
                            <img src="{{asset('/images/icon-Oportunidades.svg')}}">
                            <div class="porcentagem-opo">
                                <h3>02</h3>
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
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ramo de Atuação</a>
                    <div class="dropdown-menu desc">
                        <a href="{{route('nova-empresa')}}" ><li class="primeiro"><img src="{{asset('/images/icon-Add.svg')}}" />Cadastrar empresa</li></a>
                        <a href="{{route('ver-empresas')}}"><li><img src="{{asset('/images/icon-Visualizar.svg')}}" />Ver empresas</li></a>
                    </div>
                </div>
            </div>
            <div class="topico-2">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tributação</a>
                    <div class="dropdown-menu desc">

                    </div>
                </div>
            </div>
            <div class="topico-3">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Número de funcionários</a>
                    <div class="dropdown-menu desc">
                    </div>
                </div>
            </div>
            <div class="topico-4">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Previdencia</a>
                    <div class="dropdown-menu desc">
                
                    </div>
                </div>
            </div>
            <div class="topico-5">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Comércio Exterior</a>
                    <div class="dropdown-menu desc">
                        
                    </div>
                </div>
            </div>
            <div class="topico-6">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relacionamento</a>
                    <div class="dropdown-menu desc">
                        
                    </div>
                </div>
            </div>
            <div class="topico-7">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Outros</a>
                    <div class="dropdown-menu desc">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fundo">
        
    </div>
</section>
@endsection
