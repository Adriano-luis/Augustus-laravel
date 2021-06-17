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
                        <div class="ver"><a href="{{route('oportunidades',['id'=>$_SESSION['idEmpresa'],'cont'=>$_SESSION['cont']])}}">Ver oportunidades geradas</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="{{asset('/images/img-Informacoes.png')}}" class="img-informacoes">
            </div>
            <div class="topico-1">
                <div class="drop-1 mar-1">
                    <a class="topico-1-link" href="{{route('forneca-informacoes')."?id=".$_SESSION['idEmpresa']."&cont=".$_SESSION['cont']}}">
                        <img src="{{asset('/images/icon-Ramo-de-Atuacao.svg')}}" />
                        <span class='text'>Ramo de Atuação</span>
                    </a>
                    <div class="dropdown-menu menu-1">
                        @yield('ramo-de-atuacao')
                    </div>
                </div>
            </div>
            <div class="topico-2">
                <div class="drop-2 mar-2">
                    <a href="{{route('tributacao')."?id=".$_SESSION['idEmpresa']."&cont=".$_SESSION['cont']}}">
                        <img src="{{asset('/images/icon-Tributacao-HOVER.svg')}}" />
                        <span class='text'>Tributação</span>
                    </a>
                    <div class="dropdown-menu menu-2">
                        @yield('tributacao')
                    </div>
                </div>
            </div>
            <div class="topico-3">
                <div class="drop-3 mar-3">
                    <a href="{{route('numero-de-funcionarios')."?id=".$_SESSION['idEmpresa']."&cont=".$_SESSION['cont']}}">
                        <img src="{{asset('/images/icon-Num-Funcionarios.svg')}}" />
                        <span class='text'>Número de<br>&nbsp; &nbsp; &nbsp; &nbsp;funcionários</span>
                    </a>
                    <div class="dropdown-menu menu-3">
                        @yield('numero-de-funcionarios')
                    </div>
                </div>
            </div>
            <div class="topico-4">
                <div class="drop-4 mar-4">
                    <a href="{{route('previdencia')."?id=".$_SESSION['idEmpresa']."&cont=".$_SESSION['cont']}}">
                        <img src="{{asset('/images/icon-Previdencia.svg')}}" />
                        <span class='text'>Previdencia</span>
                    </a>
                    <div class="dropdown-menu menu-4">
                        @yield('previdencia')
                    </div>
                </div>
            </div>
            <div class="topico-5">
                <div class="drop-5 mar-5">
                    <a href="{{route('comercio-exterior')."?id=".$_SESSION['idEmpresa']."&cont=".$_SESSION['cont']}}">
                        <img src="{{asset('/images/icon-Comercio-Exterior.svg')}}" />
                        <span class='text'>Comércio Exterior</span>
                    </a>
                    <div class="dropdown-menu menu-5">
                        @yield('comercio')
                    </div>
                </div>
            </div>
            <div class="topico-6">
                <div class="drop-6 mar-6">
                    <a href="{{route('relacionamento')."?id=".$_SESSION['idEmpresa']."&cont=".$_SESSION['cont']}}">
                        <img src="{{asset('/images/icon-Relacionamento.svg')}}" />
                        <span class='text'>Relacionamento</span>
                    </a>
                    <div class="dropdown-menu menu-6">
                        @yield('relacionamento')
                    </div>
                </div>
            </div>
            <div class="topico-7">
                <div class="drop-7 mar-7">
                    <a href="{{route('outros')."?id=".$_SESSION['idEmpresa']."&cont=".$_SESSION['cont']}}">
                        <img src="{{asset('/images/icon-Outros.svg')}}" />
                        <span class='text'>Outros</span>
                    </a>
                    <div class="dropdown-menu menu-7">
                        @yield('outros')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fundo">
        
    </div>
</section>
@endsection
