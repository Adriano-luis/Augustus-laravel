@extends('layouts.basico')

@section('conteudo')
<section class="dashboard">
    <div class="container-fluid fundo">
        <div class="mix">
            <div class="row">
                <div class="col container-fluid">
                    <div class="empresas-cadastradas">
                        <div class="row">
                            <div class="title">
                                <h4>Empresas cadastradas</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 cadastradas empresas">
                                <div class="row">
                                    <img class="img-cadastradas" src="{{asset('/images/icon-Empresa.svg')}}">
                                    <h1>{{$qt}}</h1>
                                    <div class="info-cadastradas">
                                        Empresas cadastradas
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 cadastradas oportunidades">
                                <div class="row">
                                    <img class="img-geradas" src="{{asset('/images/icon-Estrela-Oportunidade.svg')}}">
                                    <h1>{{$_SESSION['totOpt']}}</h1>
                                    <div class="info-cadastradas">
                                        Oportunidades Geradas
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cadastrar">
                        <div class="row graficos">
                            <div class="col grafico">
                                <p>Estágio</p>
                                <canvas id="myChart" width="138" height="280"></canvas>
                            </div>
                            <div class="col grafico">
                                <p>Forma de Recuperação</p>
                                <canvas id="myChart2" width="138" height="280"></canvas>
                            </div>
                            <div class="col grafico">
                                <p>Tributação</p>
                                <canvas id="myChart3" width="138" height="280"></canvas>
                            </div>
                            <div class="col grafico">
                                <p>Probabilidade de Êxito</p>
                                <canvas id="myChart4" width="138" height="280"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relatorios">
            <div class="row topo-0">
                <div class="col-sm-10 titulo">
                    <h6>Selecione os filtros abaixo de acordo com aquilo que procura.</h6>
                </div>
                <div class="imprimir">
                    <div class="btn-imprimir">
                        <div onClick="window.print()" style="cursor: pointer;"><img src="{{asset('/images/icon-Print.svg')}}">Imprimir</div>
                    </div>
                </div>
            </div>
            <div class="row topo">
                <div class="col pesquisa">
                    <form action="{{route('dashboard')}}" method="GET">
                       <select class="filtro filtro-1"  name="empresa">
                           <option value="">Empresa - selecione a sua Empresa</option>
                       </select>

                       <select class="filtro filtro-2" name="post_title">
                            <option value="">Oportunidade</option>
                            <option value="Cofins Importação">Cofins Importação</option>
                            <option value="CIDE Royalties">CIDE Royalties</option>
                            <option value="CIDE SEBRAE">CIDE SEBRAE</option>
                            <option value="CSP">CSP</option>
                            <option value="FGTS">FGTS</option>
                            <option value="ICMS">ICMS</option>
                            <option value="IRPJ, CSLL, PIS e COFINS">IRPJ, CSLL, PIS e COFINS</option>
                            <option value="PIS/COFINS">PIS/COFINS</option>
                            <option value="X PIS/COFINS-Importação">X PIS/COFINS-Importação</option>
                            <option value="FUNRURAL">FUNRURAL</option>
                            <option value="CPRB">CPRB</option>
                            <option value="CDE">CDE</option>
                            <option value="IOF">IOF</option>
                        </select>

                        <select class="filtro filtro-3" name="estagio">
                            <option value="">Estágio</option>
                            <option value="7">Sem classificação</option>
                            <option value="1">Descartada</option>
                            <option value="2">Enviada</option>
                            <option value="3">Em espera</option>
                            <option value="4">Em análise</option>
                            <option value="5">Implementar</option>
                            <option value="6">Implementada</option>
                        </select>

                        <select class="filtro filtro-4" name="forma">
                            <option value="">Forma</option>
                            <option value="1">Administrativo</option>
                            <option value="2">Judicial</option>
                            <option value="3">Administrativo / Judicial</option>
                        </select>

                        <select class="filtro filtro-5" name="tributacao">
                            <option value="">Tributação</option>
                            <option value="1">Federal</option>
                            <option value="2">Estadual</option>
                            <option value="3">Municipal</option>
                        </select>

                        <select class="filtro filtro-6" name="probabilidade">
                            <option value="">Probabilidade de Êxito</option>
                            <option value="1">Provável</option>
                            <option value="2">Possível</option>
                            <option value="3">Remota</option>
                        </select>

                        <input type="submit" value="Filtrar">
                    </form>
                </div>
            </div>
                
                    <?php 
                        $i = 0;
                        $formaAdmin = 0;
                        $formaJud = 0;
                        $formaAdminJud = 0;
                        $tribFed = 0;
                        $tribEst = 0;
                        $tribMun = 0;
                        $probPro = 0;
                        $probPos = 0;
                        $probRem = 0;
                        $descartada = 0;
                        $enviada = 0;
                        $espera = 0;
                        $analise = 0;
                        $implementar = 0;
                        $implementada = 0;
                        $sem = 0;
                     ?>
                    @foreach ($relatorios as $nome => $v)
                    @if ($v != '')
                    @foreach ($v as $key => $relatorio)
                    <div class="cartoes">
                        <div class="row cartao">
                            <div class="col-sm-5 opcoes">
                                <div class="nome">
                                    <h1>{{$relatorio->post_title}}</h1>
                                    <h2>{{$nome}}</h2>
                                    <h2>{{$relatorio->post_excerpt}}</h2>
                                </div>
                                <div class="row estagio">
                                    <?php 
                                        $empresa = DB::table('empresas')->Where('nome',$nome)->get(['id']);
                                        
                                        $str = substr($empresa,8);
                                        $str = substr($str, 0,-3);
                                        $valorStatus = DB::table('classifica_relatorio')->join('relatorios', 'classifica_relatorio.id_relatorio', '=', 'relatorios.id')
                                        ->where('classifica_relatorio.id_empresa',$str)
                                        ->where('classifica_relatorio.id_relatorio',$relatorio->id)
                                        ->get(['classificacao']);
                                        $vsatus = substr($valorStatus,19);
                                        $valorStatus = substr($vsatus, 0,-3);
                                    ?>
                                    Estágio:<div class="estagio-info">
                                        <?php
                                        if ($valorStatus == "1") {
                                            $descartada++;
                                            echo 'Descartada';
                                        }elseif ($valorStatus == "2") {
                                            $enviada++;
                                            echo 'Enviada';
                                        } elseif ($valorStatus == "3") {
                                            $espera++;
                                            echo 'Em espera';
                                        }elseif ($valorStatus == "4") {
                                            $analise++;
                                            echo 'Em análise';
                                        }elseif ($valorStatus == "5") {
                                            $implementar++;
                                            echo 'Implementar';
                                        }elseif ($valorStatus == "6") {
                                            $implementada++;
                                            echo 'Implementada';
                                        }elseif ($valorStatus == "7") {
                                            $sem++;
                                            echo 'Sem classificação';
                                        }else {
                                            echo 'Não definido';
                                        }  
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row categorias">
                                <div class="forma">
                                    <p>Forma de Recuperação</p>
                                    <div class="administrativo">
                                        @if ($relatorio->forma == 1)
                                            <img src="{{asset('/images/icon-Administrativo.svg')}}"><br>
                                            <span>Administrativo</span>
                                            <?php $formaAdmin++; ?>
                                        @endif
                                        @if ($relatorio->forma == 2)
                                            <img src="{{asset('/images/icon-Judicial.svg')}}"><br>
                                            <span>Judicial</span>
                                            <?php $formaJud++; ?>
                                        @endif
                                        @if ($relatorio->forma == 3)
                                            <img src="{{asset('/images/icon-Administrativo-Judicial.svg')}}"><br>
                                            <span>Administrativo / Judicial</span> 
                                            <?php $formaAdminJud++; ?>
                                        @endif
                                    </div>
                                </div>
                                <div class="tributacao">
                                    <p>Tributação</p>
                                    <div class="tributacao">
                                        @if ($relatorio->tributacao == 1)
                                            <img src="{{asset('/images/icon-Municipal.svg')}}"><br>
                                            <span>Federal</span>
                                            <?php $tribFed++; ?>
                                        @endif

                                        @if ($relatorio->tributacao == 2)
                                            <img src="{{asset('/images/icon-Estadual.svg')}}"><br>
                                            <span>Estadual</span>
                                            <?php $tribEst++; ?>
                                        @endif

                                        @if ($relatorio->tributacao == 3)
                                            <img src="{{asset('/images/icon-Federal.svg')}}"><br>
                                            <span>Municipal</span>
                                            <?php $tribMun++; ?>
                                        @endif
                                    </div>
                                </div>
                                <div class="exito">
                                    <p>Probabilidade de Êxito</p>
                                    <div class="exito">
                                        @if ($relatorio->probabilidade == 1)
                                            <img src="{{asset('/images/icon-Possivel.svg')}}"><br> 
                                            <span>Provável</span>
                                            <?php $probPro++; ?>
                                        @endif

                                        @if ($relatorio->probabilidade == 2)
                                            <img src="{{asset('/images/icon-Provavel.svg')}}"><br>
                                            <span>Possível</span>
                                            <?php $probPos++; ?>
                                        @endif

                                        @if ($relatorio->probabilidade == 3)
                                            <img src="{{asset('/images/icon-Remota.svg')}}"><br>
                                            <span>Remota</span>
                                            <?php $probRem++; ?>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <?php $i++; ?>
                    @endforeach
                
        </div>
        <div class="paginacao">
            <input type="hidden" id="adminGrafico" value="{{$formaAdmin}}">
            <input type="hidden" id="judGrafico" value="{{$formaJud}}">
            <input type="hidden" id="adminJudGrafico" value="{{$formaAdminJud}}">
            <input type="hidden" id="fedGrafico" value="{{$tribFed}}">
            <input type="hidden" id="estGrafico" value="{{$tribEst}}">
            <input type="hidden" id="munGrafico" value="{{$tribMun}}">
            <input type="hidden" id="proGrafico" value="{{$probPro}}">
            <input type="hidden" id="posGrafico" value="{{$probPos}}">
            <input type="hidden" id="rembGrafico" value="{{$probRem}}">
            <input type="hidden" id="desGrafico" value="{{$descartada}}">
            <input type="hidden" id="envGrafico" value="{{$enviada}}">
            <input type="hidden" id="espGrafico" value="{{$espera}}">
            <input type="hidden" id="anaGrafico" value="{{$analise}}">
            <input type="hidden" id="imGrafico" value="{{$implementar}}">
            <input type="hidden" id="impleGrafico" value="{{$implementada}}">
            <input type="hidden" id="sembGrafico" value="{{$sem}}">
        </div><br/><br/>
        <div class="marca">
            <img src="{{asset('/images/img-augustus-fundo.png')}}">
        </div>
    </div>
</section>
@endsection