@extends('layouts.basico')

@section('conteudo')
<section class="oportunidades">
    <div class="banner">
        <div class="row">
            <div class="col-sm-8 info">
                <h2><span class="titulo">Oportunidades Geradas</span></h2>
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
                            <img src="{{asset('/images/icon-Informacoes.svg')}}">
                        </div>
                        <div class="ver"><a href="{{route('forneca-informacoes',['id'=>$empresa->id,'cont'=>$cont])}}">Editar informações</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <img class="marca" src="{{asset('/images/img-augustus-fundo.png')}}">
            </div>
        </div>
    </div>
    <div class="fundo">
        
    </div>
</section>
@endsection
