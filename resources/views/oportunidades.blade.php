@extends('layouts.basico')

@section('conteudo')
<section class="oportunidades-geradas">
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
            <div class="lista-oportunidades-topo">

            </div>
        </div>
    </div>
    <div class="lista-oportunidades">
        <?php $qt=sizeof($relatorios) ?>
        <div class="row qt-oportunidades">
            <img src="{{asset('/images/icon-Estrela-Oportunidade.svg')}}">
            <h2><span class="qt-titulo">{{$qt}} Oportunidades Geradas</span></h2>
        </div>
        <hr>
        @foreach ($relatorios as $relatorio)
            <div class="titulo-ralatorio">
                <h6>{{$relatorio->post_title}}</h6>
            </div>
            <div class="relatorio">
                <div class=" classificacao">
                    <div class="row status">
                        <p>Classifique o status da Oportunidade:</p>
                        <div class="proxima">Salvar Alterações</div>
                    </div>
                    <div class="row marcar-classificacao">
                    <div class=" row radios">
                        <hr class="linha">
                        <input type="radio" class="radio-classi classi-1" value="1">
                        <input type="radio" class="radio-classi" value="0">
                        <input type="radio" class="radio-classi" value="2">
                        <input type="radio" class="radio-classi" value="3">
                        <input type="radio" class="radio-classi" value="4">
                        <input type="radio" class="radio-classi" value="5">
                        <input type="radio" class="radio-classi" value="6">
                    </div>
                    </div>
                    <div class="row textos">
                        <p>Sem classificação</p>
                        <p>Descartada</p>
                        <p>Enviada</p>
                        <p>Em espera</p>
                        <p>Em análise</p>
                        <p>Implementar</p>
                        <p>Implementada</p>
                    </div>
                </div>
                <div class="row geral">

                </div>
                <div class="row quadro">

                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
