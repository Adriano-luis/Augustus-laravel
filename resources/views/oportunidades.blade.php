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
                    <h3>{{$relatorio->post_title}}</h3>
                    <h2>{{$relatorio->post_excerpt}}</h2>
                </div>
                <div class="relatorio indice-{{$aux}}">
                    <div class=" classificacao">
                        <div class="row status">
                            <p>Classifique o status da Oportunidade:</p>
                            <div id="salvaAlteracoes" class="proxima">Salvar Alterações</div>
                        </div>
                        <div class="row marcar-classificacao">
                        <div id="status-oportunidade" class=" row radios">
                            <?php
                                foreach ($status as $x) {
                                    if($x->id_relatorio == $relatorio->id && $x->id_empresa == $empresa->id
                                    && $x->classificacao != ''){
                                        $valorStatus = $x->classificacao;
                                    }else{
                                        $valorStatus = '';
                                    }
                                }
                            ?>
                            <input id="valor" type="hidden" value="{{$valorStatus}}">
                            <hr class="linha">
                            <input id="relatorio-id" type="hidden" value="{{$relatorio->id}}">
                            <input id="empresa-id" type="hidden" value="{{$empresa->id}}">
                            <input type="radio" class="radio-classi-0" value="7" {{$valorStatus == 7 ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-1" value="1" {{$valorStatus == 1 ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-2" value="2" {{$valorStatus == 2 ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-3" value="3" {{$valorStatus == 3 ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-4" value="4" {{$valorStatus == 4 ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-5" value="5" {{$valorStatus == 5 ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-6" value="6" {{$valorStatus == 6 ? 'checked' : '' }}>
                            <?php $valorStatus = ''; ?>
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
                                @if ($relatorio->forma == 1)
                                <img src="{{asset('/images/icon-Administrativo.svg')}}">
                                <span>Administrativo</span>
                                @endif
                                @if ($relatorio->forma == 2)
                                <img src="{{asset('/images/icon-Judicial.svg')}}">
                                <span>Judicial</span>
                                @endif
                                @if ($relatorio->forma == 3)
                                <img src="{{asset('/images/icon-Administrativo-Judicial.svg')}}">
                                <span>Administrativo / Judicial</span> 
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <p>Tributação</p>
                            <div class="tributacao">
                                @if ($relatorio->tributacao == 1)
                                <img src="{{asset('/images/icon-Municipal.svg')}}">
                                <span>Municipal</span>
                                @endif

                                @if ($relatorio->tributacao == 2)
                                <img src="{{asset('/images/icon-Estadual.svg')}}">
                                <span>Estadual</span>
                                @endif

                                @if ($relatorio->tributacao == 3)
                                <img src="{{asset('/images/icon-Federal.svg')}}">
                                <span>Federal</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <p>Probabilidade de Êxito</p>
                            <div class="exito">
                                @if ($relatorio->probabilidade == 1)
                                <img src="{{asset('/images/icon-Remota.svg')}}">
                                <span>Remota</span>
                                @endif

                                @if ($relatorio->probabilidade == 2)
                                <img src="{{asset('/images/icon-Provavel.svg')}}">
                                <span>Provável</span>
                                @endif

                                @if ($relatorio->probabilidade == 3)
                                <img src="{{asset('/images/icon-Possivel.svg')}}">
                                <span>Possível</span>
                                @endif
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
                        <div class="row">
                            <div class="proxima" ><a href="" data-toggle="modal" data-target="#modal-enviar">Enviar</a></div>
                            <div class="proxima" onClick="window.print()">Imprimir</div>
                        </div>
                        
                    </div>
                </div>
                <?php $aux++; ?>
            @endforeach
        @endif
    </div>
    <div id="modal-enviar" class="modal-container enviar">
        <div class="m-enviar">
            <div class="row title">
                Enviar por email
                <form action="" method="POST">
                    @csrf
            </div>
            <div class="row">
                <input type="submit" id="modal-btn-enviar" class="enviar" value="Enviar">
            </form>
            </div>
            </form>
        </div>
    </div>
</section>
@endsection
