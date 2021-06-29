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
                                    <h2>nome</h2>
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
                                        <div class="conteudo-info">info</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Ano de Constituição:</div>
                                        <div class="conteudo-info">info</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Cidade Sede:</div>
                                        <div class="conteudo-info">info</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row dados-2">
                                    <div class="col titulo-info">
                                        <div>Estados com Filiais</div>
                                        <div class="conteudo-info">info</div>
                                    </div>
                                    <div class="col titulo-info">
                                        <div>Tipo Societário:</div>
                                        <div class="conteudo-info">info</div>
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
                                    <a href=""><img src="{{asset('/images/icon-Relatorios.svg')}}">Relatórios</a>
                                </div>
                                <hr>
                                <div class="excluir">
                                    <a href="" id="link-excluir"><img src="{{asset('/images/icon-Excluir.svg')}}">Excluir</a>
                                </div>
                                <hr>
                                <div class="imprimir">
                                    <a onClick="window.print()"><img src="{{asset('/images/icon-Print.svg')}}">Imprimir</a>
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
                                pergunta
                            </div>
                            <div class="resposta">
                                resposta
                            </div>
                        </div>
                        <div class="col perguntas">
                            <div class="pergunta">
                                pergunta
                            </div>
                            <div class="resposta">
                                resposta
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row perguntas-respostas">
                        <div class="col perguntas">
                            <div class="pergunta">
                                pergunta
                            </div>
                            <div class="resposta">
                                resposta
                            </div>
                        </div>
                        <div class="col perguntas">
                            <div class="pergunta">
                                pergunta
                            </div>
                            <div class="resposta">
                                resposta
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row perguntas-respostas">
                        <div class="col perguntas">
                            <div class="pergunta">
                                pergunta
                            </div>
                            <div class="resposta">
                                resposta
                            </div>
                        </div>
                        <div class="col perguntas">
                            <div class="pergunta">
                                pergunta
                            </div>
                            <div class="resposta">
                                resposta
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row perguntas-respostas">
                        <div class="col perguntas">
                            <div class="pergunta">
                                pergunta
                            </div>
                            <div class="resposta">
                                resposta
                            </div>
                        </div>
                        <div class="col perguntas">
                            <div class="pergunta">
                                pergunta
                            </div>
                            <div class="resposta">
                                resposta
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 infos-2">
                    <div class="informacoes-fornecidas">
                        <div class="row">
                            <img src="{{asset('/images/icon-informacoes.svg')}}">
                            <div class="porcentagem-info">
                                <h3>10%</h3>
                            </div>
                        </div>
                        <div class="info-texto">
                            DAS INFORMAÇÕES<br/> FORNECIDAS
                        </div>
                        <div class="progress">
                            <div id="barra-"class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="proxima"><a href="">Editar informações</a></div>
                    </div>
                    <div class="oportunidades-geradas">
                        <div class="row">
                            <img src="{{asset('/images/icon-Oportunidades.svg')}}">
                            <div class="porcentagem-opo">
                                <h3>10</h3>
                            </div>
                        </div>
                        <div class="opo-texto">
                            OPORTUNIDADES<br/> GERADAS
                        </div>
                        <div class="proxima-opt"><a href="">Veja todas as oportunidades</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection