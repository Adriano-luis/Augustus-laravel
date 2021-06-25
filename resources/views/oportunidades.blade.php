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
        <?php if($relatorios>0){ $qt=sizeof($relatorios);}else{ $qt=0;} ?>
        <input type="hidden" id="quantidade" value="{{$qt}}">
        <div class="row qt-oportunidades">
            <img src="{{asset('/images/icon-Estrela-Oportunidade.svg')}}">
            <h2><span class="qt-titulo">{{$qt}} Oportunidades Geradas</span></h2>
        </div>
        <hr>
        <?php $aux = 0; ?>
        @if ($relatorios >0)
            @foreach ($relatorios as $relatorio)
                <div class="titulo-ralatorio">
                    <h6>{{$relatorio->post_title}}</h6>
                </div>
                <div class="relatorio indice-{{$aux}}">
                    <div class=" classificacao">
                        <div class="row status">
                            <p>Classifique o status da Oportunidade:</p>
                            <div class="proxima">Salvar Alterações</div>
                        </div>
                        <div class="row marcar-classificacao">
                        <div id="status-oportunidade" class=" row radios">
                            <?php if($status[$aux]->id_relatorio == $relatorio->id && $status[$aux]->classificacao != ''){
                               $valorStatus = $status[$aux]->classificacao;
                            } else{
                                $valorStatus = '';
                            }
                            ?>
                            <input id="valor" type="hidden" value="{{$valorStatus}}">
                            @csrf
                            <hr class="linha" onload="carregaStatus()">
                            <input id="relatorio-id" type="hidden" value="{{$relatorio->id}}">
                            <input id="empresa-id" type="hidden" value="{{$empresa->id}}">
                            <input type="radio" class="radio-classi-0" value="0">
                            <input type="radio" class="radio-classi-1" value="1">
                            <input type="radio" class="radio-classi-2" value="2">
                            <input type="radio" class="radio-classi-3" value="3">
                            <input type="radio" class="radio-classi-4" value="4">
                            <input type="radio" class="radio-classi-5" value="5">
                            <input type="radio" class="radio-classi-6" value="6">
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
                        <div class="col ">
                            <p>Forma de Recuperação</p>
                            <div class="administrativo">
                                <img src="">
                                <span>{{$relatorio->forma}}</span>
                            </div>
                        </div>
                        <div class="col">
                            <p>Tributação</p>
                            <div class="tributacao">
                                <img src="">
                                <span>{{$relatorio->tributacao}}</span>
                            </div>
                        </div>
                        <div class="col">
                            <p>Probabilidade de Êxito</p>
                            <div class="exito">
                                <img src="">
                                <span>{{$relatorio->probabilidade}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row quadro">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" style="margin-left:0px !important;">
                                <a class="nav-link" id="resumo-{{$aux}}-tab" data-toggle="tab" href="#resumo-{{$aux}}" role="tab" aria-controls="resumo" aria-selected="true" style="padding-top: 15px;">Resumo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="entendendo-{{$aux}}-tab" data-toggle="tab" href="#entendendo-{{$aux}}" role="tab" aria-controls="entendendo" aria-selected="true">Entendendo a<br> Oportunidade</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="posicao-{{$aux}}-tab" data-toggle="tab" href="#posicao-{{$aux}}" role="tab" aria-controls="posicao" aria-selected="true">Posição dos<br> Tribunais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="estimativas-{{$aux}}-tab" data-toggle="tab" href="#estimativas-{{$aux}}" role="tab" aria-controls="estimativas" aria-selected="true">Estimativas<br> de Ganho</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="aproveitamento-{{$aux}}-tab" data-toggle="tab" href="#aproveitamento-{{$aux}}" role="tab" aria-controls="aproveitamento" aria-selected="true">Formas de<br> Aproveitamento</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="resumo-{{$aux}}" role="tabpanel" aria-labelledby="resumo-tab">
                            {{$relatorio->resumo}}
                        </div>
                        <div class="tab-pane fade" id="entendendo-{{$aux}}" role="tabpanel" aria-labelledby="entendendo-tab">
                            {{$relatorio->entendendo_a_opostunidade}}
                        </div>
                        <div class="tab-pane fade" id="posicao-{{$aux}}" role="tabpanel" aria-labelledby="posicao-tab">
                            {{$relatorio->posicoes_nos_tribunais}}
                        </div>
                        <div class="tab-pane fade" id="estimativas-{{$aux}}" role="tabpanel" aria-labelledby="estimativas-tab">
                            {{$relatorio->estimativa_de_ganho}}
                        </div>
                        <div class="tab-pane fade" id="aproveitamento-{{$aux}}" role="tabpanel" aria-labelledby="aproveitamento-tab">...</div>
                    </div>
                </div>
                <?php $aux++; ?>
            @endforeach
        @endif
    </div>
</section>
@endsection
