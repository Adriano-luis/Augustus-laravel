@extends('layouts.basico')

@section('conteudo')
<section class="oportunidades-geradas">
    <div class="banner">
        <div class="row">
            <div class="col-sm-8 info">
                <h2><span class="titulo">Oportunidades Geradas</span></h2>
                <p>Nosso sistema gera relatórios que vão lhe permitir conhecer quais Oportunidades Tributárias,
                     tanto jurídicas como administrativas, a sua empresa possui.</p>

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
                        <input type="hidden" class="valor" value="{{$aux}}">
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
                                    }
                                }
                                if(!isset($valorStatus)){
                                    $valorStatus = '';
                                }
                            ?>
                            <input id="valor" type="hidden" value="{{$valorStatus}}">
                            <hr class="linha">
                            <input id="relatorio-id" type="hidden" value="{{$relatorio->id}}">
                            <input id="empresa-id" type="hidden" value="{{$empresa->id}}">
                            <input type="radio" class="radio-classi-0" value="7" {{$valorStatus == "7" ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-1" value="1" {{$valorStatus == "1" ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-2" value="2" {{$valorStatus == "2" ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-3" value="3" {{$valorStatus == "3" ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-4" value="4" {{$valorStatus == "4" ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-5" value="5" {{$valorStatus == "5" ? 'checked' : '' }}>
                            <input type="radio" class="radio-classi-6" value="6" {{$valorStatus == "6" ? 'checked' : '' }}>
                            <?php $valorStatus = ''; ?>
                        </div>
                        </div>
                        <div class="row textos">
                            <p>Sem classificação</p>
                            <p>Descartada</p>
                            <p>Enviada</p>
                            <p>Em espera</p>
                            <p>Em análise</p>
                            <p>Em implementação</p>
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
                                <span>Federal</span>
                                @endif

                                @if ($relatorio->tributacao == 2)
                                <img src="{{asset('/images/icon-Estadual.svg')}}">
                                <span>Estadual</span>
                                @endif

                                @if ($relatorio->tributacao == 3)
                                <img src="{{asset('/images/icon-Federal.svg')}}">
                                <span>Municipal</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <p>Probabilidade de Êxito</p>
                            <div class="exito">
                                @if ($relatorio->probabilidade == 1)
                                <img src="{{asset('/images/icon-Remota.svg')}}">
                                <span>Provável</span>
                                @endif

                                @if ($relatorio->probabilidade == 2)
                                <img src="{{asset('/images/icon-Provavel.svg')}}">
                                <span>Possível</span>
                                @endif

                                @if ($relatorio->probabilidade == 3)
                                <img src="{{asset('/images/icon-Possivel.svg')}}">
                                <span>Remota</span>
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
                        <div class="tab-pane fade" id="aproveitamento-{{$aux}}" role="tabpanel" aria-labelledby="aproveitamento-tab">
                            <?php $formas = $aproveitamentos::join('relatorios','aproveitamentos.id_relatorio','=','relatorios.id')
                            ->Where('relatorios.id',$relatorio->id)->get();
                            
                            ?>
                            <?php $j = 0; $k = 1; ?>
                            @for ($i = 0; $i < sizeOf($formas); $i++)
                                <div class="row">
                                    @if (isset($formas[$i+$j]))
                                        <div class=" col-sm-5 formas">
                                            <div class="ind">{{$formas[$i+$j]->indice}}</div>{{$formas[$i+$j]->titulo}}
                                            <div class="chance">
                                                <div class="chance-0" style="{{$formas[$i+$j]->chance_de_exito == 1 ? '' : 'display: none'}}">
                                                    @if ($formas[$i+$j]->chance_de_exito == 1)
                                                        <span>Chance de Êxito: Baixa</span>
                                                    @endif
                                                </div>

                                                <div class="chance-1" style="{{$formas[$i+$j]->chance_de_exito == 2 ? '' : 'display: none'}}">
                                                    @if ($formas[$i+$j]->chance_de_exito == 2)
                                                        <span>Chance de Êxito: Média</span>
                                                    @endif
                                                </div>

                                                <div class="chance-2" style="{{$formas[$i+$j]->chance_de_exito == 3 ? '' : 'display: none'}}">
                                                    @if ($formas[$i+$j]->chance_de_exito == 3)
                                                        <span>Chance de Êxito: Alta</span>
                                                    @endif
                                                </div>

                                                <div class="chance-3" style="{{$formas[$i+$j]->chance_de_exito == 4 ? '' : 'display: none'}}">
                                                    @if ($formas[$i+$j]->chance_de_exito == 4)
                                                        <span>Chance de Êxito: Muito Alta</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <?php $titulo =$formas[$i+$j]->titulo; $chance = $formas[$i+$j]->chance_de_exito; $desc = $formas[$i+$j]->descricao; $vant = $formas[$i+$j]->vantagens; $desvant = $formas[$i+$j]->desvantagens; $risco = $formas[$i+$j]->risco; $doc = $formas[$i+$j]->documentos ;  ?>
                                            <input type="hidden" id="e-{{$aux}}-1" value="{{$titulo}}*{{$chance}}*{{$desc}}*{{$vant}}*{{$desvant}}*{{$risco}}*{{$doc}}">
                                            <a onclick="setLink()" class="ver-formas">Ver</a>
                                        </div>
                                    @endif
                                    @if (isset($formas[$i+$k]))
                                        <div class=" col-sm-5 formas">
                                            <div class="ind">{{$formas[$i+$k]->indice}}</div>{{$formas[$i+$k]->titulo}}
                                            <div class="chance">
                                                <div class="chance-0" style="{{$formas[$i+$k]->chance_de_exito == 1 ? '' : 'display: none'}}">
                                                    @if ($formas[$i+$k]->chance_de_exito == 1)
                                                        <span>Chance de Êxito: Baixa</span>
                                                    @endif
                                                </div>

                                                <div class="chance-1" style="{{$formas[$i+$k]->chance_de_exito == 2 ? '' : 'display: none'}}">
                                                    @if ($formas[$i+$k]->chance_de_exito == 2)
                                                        <span>Chance de Êxito: Média</span>
                                                    @endif
                                                </div>

                                                <div class="chance-2" style="{{$formas[$i+$k]->chance_de_exito == 3 ? '' : 'display: none'}}">
                                                    @if ($formas[$i+$k]->chance_de_exito == 3)
                                                        <span>Chance de Êxito: Alta</span>
                                                    @endif
                                                </div>

                                                <div class="chance-3" style="{{$formas[$i+$k]->chance_de_exito == 4 ? '' : 'display: none'}}">
                                                    @if ($formas[$i+$k]->chance_de_exito == 4)
                                                        <span>Chance de Êxito: Muito Alta</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <?php $titulo =$formas[$i+$k]->titulo; $chance = $formas[$i+$k]->chance_de_exito; $desc = $formas[$i+$k]->descricao; $vant = $formas[$i+$k]->vantagens; $desvant = $formas[$i+$k]->desvantagens; $risco = $formas[$i+$k]->risco; $doc = $formas[$i+$k]->documentos ;  ?>
                                            <input type="hidden" id="e-{{$aux}}-2" value="{{$titulo}}*{{$chance}}*{{$desc}}*{{$vant}}*{{$desvant}}*{{$risco}}*{{$doc}}">
                                            <a onclick="setLink()" class="ver-formas">Ver</a>
                                        </div>
                                    @endif
                                    <?php $j++; $k++; ?>
                            </div>
                            @endfor  
                        </div>
                        <div class="row">
                            <div class="proxima" ><a href="" data-toggle="modal" data-target="#modal-enviar" onclick="enviaEmail('{{$aux}}')">Enviar</a></div>
                            <div class="proxima" onClick="window.print()">Imprimir</div>
                        </div>
                        
                    </div>
                </div>
                <?php $aux++; ?>
            @endforeach
            <div class="link-ver-page">
                <h3>Formas de Aproveitamento</h3>
                <div class="descricao-link"></div>
                <div class="ver-chance">
                    <div class="ver-chance-0">
                        <span>Chance de Êxito: Baixa</span>
                    </div>

                    <div class="ver-chance-1">
                        <span>Chance de Êxito: Média</span>
                    </div>

                    <div class="ver-chance-2">
                        <span>Chance de Êxito: Alta</span>
                    </div>

                    <div class="ver-chance-3">
                        <span>Chance de Êxito: Muito Alta</span>
                    </div>
                </div>
                <div class="descricao-aproveitamento"></div>
                <label>VANTAGENS:</label>
                <div class="vantagens-aproveitamento"></div>
                <label>DESVANTAGENS:</label>
                <div class="desvantagens-aproveitamento"></div>
                <label>ANÁLISE DE RISCO:</label>
                <div class="riscos-aproveitamento"></div>
                <label>DOCUMENTOS:</label>
                <div class="documentos-aproveitamento"></div>
                <div class="voltar-aproveitamento">Voltar</div>
            </div>
        @endif
    </div>
    <div id="modal-enviar" class="modal-container enviar">
        <div class="m-enviar">
            <div class="row title">
                <h3>Enviar por email</h3>
            </div>
            <form>
                
                <input type="text" class="enviarEmail" name="enviarEmail" placeholder="Informe um Email"><br>
                <div id="modal-btn-enviar" class="enviar">Enviar</div>
                <input type="hidden" id="empresa" value="{{$empresa->id}}">
                <input type="hidden" id="cont" value="{{$cont}}">
                <input type="hidden" id="enviaResumo" value="">
                <input type="hidden" id="enviaEntendendo" value="">
                <input type="hidden" id="enviaPosicao" value="">
                <input type="hidden" id="enviaestimativas" value="">
            </form>
        </div>
    </div>
    <script>
        function setLink(){
            var valor = document.querySelectorAll('.valor');
            valor.forEach(rodaDados);

            function rodaDados(i,valor){

                e = $('#e-'+valor+'-1').val();
                dados = e.split("*");
                if(dados[0]){
                    $('.descricao-link').html(dados[0]);
                }

                if(dados[1]){
                    if(dados[1] == "1"){
                        console.log(dados[1]);
                        $('.ver-chance-0').css('display','block');
                        $('.ver-chance-1').css('display','none');
                        $('.ver-chance-2').css('display','none');
                        $('.ver-chance-3').css('display','none');
                    }
                    if(dados[1] == "2"){
                        $('.ver-chance-0').css('display','none');
                        $('.ver-chance-1').css('display','block');
                        $('.ver-chance-2').css('display','none');
                        $('.ver-chance-3').css('display','none');
                    }
                    if(dados[1] == "3"){
                        $('.ver-chance-0').css('display','none');
                        $('.ver-chance-2').css('display','block');
                        $('.ver-chance-1').css('display','none');
                        $('.ver-chance-3').css('display','none');
                    }
                    if(dados[1] == "4"){
                        $('.ver-chance-0').css('display','none');
                        $('.ver-chance-1').css('display','none');
                        $('.ver-chance-2').css('display','none');
                        $('.ver-chance-2').css('display','block');
                    }
                }

                if(dados[2]){
                    $('.descricao-aproveitamento').html(dados[2]);
                }

                if(dados[3]){
                    $('.vantagens-aproveitamento').html(dados[3]);
                }

                if(dados[4]){
                    $('.desvantagens-aproveitamento').html(dados[4]);
                }
                
                if(dados[5]){
                    $('.riscos-aproveitamento').html(dados[5]);
                }

                if(dados[6]){
                    $('.documentos-aproveitamento').html(dados[6]);
                }
            }
        }

        function enviaEmail(i){
                resumo = $('#resumo-'+i).html();
                entendendo = $('#entendendo-'+i).html();
                posicao = $('#posicao-'+i).html();
                estimativa = $('#estimativas-'+i).html();

                $('#enviaResumo').val(resumo); 
                $('#enviaEntendendo').val(entendendo); 
                $('#enviaPosicao').val(posicao); 
                $('#enviaestimativas').val(estimativa); 
            }
    </script>
</section>
@endsection
