@extends('layouts.basico')

@section('conteudo')
<section class="empresa-visualizar">
    <div class="container-fluid fundo">
        <div class="mix">
            <div class="row-sm-8">
                <div class="col container-fluid">
                    <div class="empresas-visualizar">
                        <div class="row-sm-8" style="padding-top: 10px;">
                            <div class="col visualizar">
                                <div class="row">
                                    <img class="img-visualizar" src="{{asset('/images/icon-Empresa.svg')}}">
                                    <p>PERFIL DA EMPRESA</p>
                                    <h2>{{$empresa->nome}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="max-width: 1052px;margin-left:144px;">
                            <div class="col-sm-8">
                                <div class="row titulo">
                                    <h6>Dados da empresa:</h6>
                                </div>
                                <div class="row dados-1">
                                    <div class="col titulo-info">
                                        <div>CNPJ:</div>
                                        <div class="conteudo-info">{{$empresa->cnpj}}</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Ano de Constituição:</div>
                                        <div class="conteudo-info">{{$empresa->ano}}</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Cidade Sede:</div>
                                        <div class="conteudo-info">{{$empresa->cidade}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row dados-2">
                                    <div class="col titulo-info">
                                        <div>Estados com Filiais</div>
                                        <div class="conteudo-info">{{$empresa->estado}}</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Tipo Societário:</div>
                                        <div class="conteudo-info">{{$empresa->tipo}}</div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                            </div>
                            <div class="col-sm-4 botoes">
                                <div class="editar">
                                    <a href="" id="link-editar"><img src="{{asset('/images/icon-Editar.svg')}}">Editar</a>
                                </div>
                                <hr>
                                <div class="relatorios">
                                    <a href="{{route('relatorios',['id'=>$empresa->id,'cont'=>$cont])}}"><img src="{{asset('/images/icon-Relatorios.svg')}}">Relatórios</a>
                                </div>
                                <hr>
                                <div class="excluir">
                                    <a href="" id="link-excluir"><img src="{{asset('/images/icon-Excluir.svg')}}">Excluir</a>
                                </div>
                                <hr>
                                <div class="imprimir">
                                    <a onClick="window.print()" style="cursor: pointer;"><img src="{{asset('/images/icon-Print.svg')}}">Imprimir</a>
                                </div>
                                <hr>
                                <div class="enviar">
                                    <a><img src="{{asset('/images/icon-Email.svg')}}">Enviar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-visualizar">
            <div class="row">
                <div class="col-sm-8 infos">
                    <div class="row titulo">
                        <h6>Informações Fornecidas:</h6>
                    </div>
                    <div class="row perguntas-respostas">
                        <div class="col perguntas">
                            <div class="pergunta">
                                <?php $pergunta1 = $perguntas->where('id',242) ?>
                                {{$pergunta1[0]->post_title}}
                            </div>
                            <div class="resposta">
                                <?php $resposta1 = $respostas->where('id_pergunta',242) ?>
                                @foreach ($resposta1 as $item)
                                    @if ($item != '')
                                        {{$item->post_title}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col perguntas">
                            <div class="pergunta">
                                <?php $pergunta2 = $perguntas->where('id',302) ?>
                                {{$pergunta2[6]->post_title}}
                            </div>
                            <div class="resposta">
                                <?php $resposta2 = $respostas->where('id_pergunta',302) ?>
                                @foreach ($resposta2 as $item)
                                    @if ($item != '')
                                        {{$item->post_title}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row perguntas-respostas">
                        <div class="col perguntas">
                            <div class="pergunta">
                                <?php $pergunta3 = $perguntas->where('id',313) ?>
                                {{$pergunta3[7]->post_title}}
                            </div>
                            <div class="resposta">
                                <?php $resposta3 = $respostas->where('id_pergunta',313) ?>
                                @foreach ($resposta3 as $item)
                                    @if ($item != '')
                                        {{$item->post_title}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col perguntas">
                            <div class="pergunta">
                                <?php $pergunta4 = $perguntas->where('id',329) ?>
                                {{$pergunta4[8]->post_title}}
                            </div>
                            <div class="resposta">
                                <?php $resposta4 = $respostas->where('id_pergunta',329) ?>
                                @foreach ($resposta4 as $item)
                                    @if ($item != '')
                                        {{$item->post_title}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row perguntas-respostas">
                        <div class="col perguntas">
                            <div class="pergunta">
                                <?php $pergunta5 = $perguntas->where('id',341) ?>
                                {{$pergunta5[9]->post_title}}
                            </div>
                            <div class="resposta">
                                <?php $resposta5 = $respostas->where('id_pergunta',341) ?>
                                @foreach ($resposta5 as $item)
                                    @if ($item != '')
                                        {{$item->post_title}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col perguntas">
                            <div class="pergunta">
                                <?php $pergunta6 = $perguntas->where('id',352) ?>
                                {{$pergunta6[10]->post_title}}
                            </div>
                            <div class="resposta">
                                <?php $resposta6 = $respostas->where('id_pergunta',352) ?>
                                @foreach ($resposta6 as $item)
                                    @if ($item != '')
                                        {{$item->post_title}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row perguntas-respostas">
                        <div class="col perguntas">
                            <div class="pergunta">
                                <?php $pergunta7 = $perguntas->where('id',455) ?>
                                {{$pergunta7[32]->post_title}}
                            </div>
                            <div class="resposta">
                                <?php $resposta7 = $respostas->where('id_pergunta',455) ?>
                                @foreach ($resposta7 as $item)
                                    @if ($item != '')
                                        {{$item->post_title}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col perguntas">
                            <div class="pergunta">
                                <?php $pergunta8 = $perguntas->where('id',785) ?>
                                {{$pergunta8[33]->post_title}}
                            </div>
                            <div class="resposta">
                                <?php $resposta8 = $respostas->where('id_pergunta',785) ?>
                                @foreach ($resposta8 as $item)
                                    @if ($item != '')
                                        {{$item->post_title}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 infos-2">
                    <div class="informacoes-fornecidas">
                        <div class="row">
                            <img src="{{asset('/images/icon-informacoes.svg')}}">
                            <div class="porcentagem-info">
                                <h3 id="porcentagem">{{round($porcentagem)}}%</h3>
                            </div>
                        </div>
                        <div class="info-texto">
                            DAS INFORMAÇÕES<br/> FORNECIDAS
                        </div>
                        <div class="progress">
                            <div id="barra-0" class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <a href="{{route('forneca-informacoes',['id'=>$empresa->id,'cont'=>$cont])}}"><div class="proxima">Editar informações</div></a>
                    </div>
                    <div class="oportunidades-geradas">
                        <div class="row">
                            <img src="{{asset('/images/icon-Oportunidades.svg')}}">
                            <div class="porcentagem-opo">
                                <h3>{{$oportunidades}}</h3>
                            </div>
                        </div>
                        <div class="opo-texto">
                            OPORTUNIDADES<br/> GERADAS
                        </div>
                        <a href="{{route('oportunidades',['id'=>$empresa->id,'cont'=>$cont])}}"><div class="proxima-opt">Veja todas as oportunidades</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection