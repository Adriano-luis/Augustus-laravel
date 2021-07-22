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
                                        <div>Ano de constituição:</div>
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
                                        <div>Estados com filiais</div>
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
                                <div class="editar"><a href="" data-toggle="modal" data-target="#modal-editar" onclick="setDadosAtualizar('{{$empresa->nome}},{{$empresa->cnpj}},{{$empresa->ano}},{{$empresa->cidade}},{{$empresa->estado}},{{$empresa->tipo}},{{$empresa->id}}')">
                                    <img src="{{asset('/images/icon-Editar.svg')}}">Editar</a>
                                </div>
                                <hr>
                                <div class="relatorios">
                                    <a href="{{route('relatorios',['id'=>$empresa->id,'cont'=>$cont])}}">
                                        <img src="{{asset('/images/icon-Relatorios.svg')}}">Relatórios
                                    </a>
                                </div>
                                <hr>
                                <div class="excluir">
                                    <a href="" data-toggle="modal" data-target="#modal-excluir" onclick="setDadosExcluir('{{$empresa->nome}}')">
                                        <img src="{{asset('/images/icon-Excluir.svg')}}">Excluir
                                    </a>
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
    <div id="modal-editar" class="modal-container editar">
        <div class="m-editar">
            <div class="form" >
                <form action="{{route('editar')}}" method="POST">
                    @csrf
                    <input type="hidden" id="empresa" name="empresa" value=""/>
                    <label>Cadastrar uma nova empresa</label>
                    <div class="row">
                        <input type="text" name="razao" value="" placeholder="Razão Social"/>
                    </div>
                    <div class="row">
                        <input type="text" name="cnpj" placeholder="CNPJ"/><br/>
                    </div>
                    <div class="row mini">
                        <input type="text" name="ano" placeholder="Ano de constituição" />
                        <input type="text" name="cidade" placeholder="Cidade sede" />
                    </div>
                    <div class="row">
                        <select id="estado" name="estado">
                            <option>Estado com filiais</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                        <select id="societario" name="societario">
                            <option>Tipo Societário</option>
                            <option value="Sociedade Limitada">Sociedade Limitada</option>
                            <option value="Sociedade Anônima">Sociedade Anônima</option>
                            <option value="Sociedade em Nome Coletivo">Sociedade em Nome Coletivo</option>
                            <option value="Sociedade em Comandita Simples">Sociedade em Comandita Simples</option>
                            <option value="Sociedade em Comandita por Ações">Sociedade em Comandita por Ações</option>
                            <option value="MEI">MEI</option>
                            <option value="Empresário Individual">Empresário Individual</option>
                            <option value="EIRELI">EIRELI</option>
                        </select>
                    </div>
                    <input type="submit"  value="Salvar Altereções"/>
                </form>
            </div>
        </div>
    </div>
    <div id="modal-excluir" class="modal-container excluir">
        <div class="m-excluir">
            <div class="row title">
                Você esta prestes a excluir a empresa:
                <form action="{{route('excluir')}}" method="POST">
                    @csrf
                    <input type="text" id="dadoTitulo" value="" disabled>
            </div>
            <div class="row">
                <label for="fechar"><div class="cancelar">Não</div></label>
                <input type="submit" id="modal-btn-excluir" class="excluir" value="Excluir">
            </form>
            </div>
            </form>
        </div>
    </div>
    <script>
        function setDadosExcluir(nome){
            document.getElementById("dadoTitulo").value = nome;
            document.getElementById("dadonome").value = nome;
        } 

        function setDadosAtualizar(e){
            dados = e.split(",");
            if(dados[0]){
                $('input[name="razao"]').val(dados[0]);
            }

            if(dados[1]){
                $('input[name="cnpj"]').val(dados[1]);
            }

            if(dados[2]){
                $('input[name="ano"]').val(dados[2]);
            }

            if(dados[3]){
                $('input[name="cidade"]').val(dados[3]);
            }

            if(dados[4]){
                dado = dados[4].split(" / ");
                $('#estado').find("option[value='"+dado[0]+"']").attr("selected", true);
            }
            
            if(dados[5]){
                $('#societario').find("option[value='"+dados[5]+"']").attr("selected", true);
            }

            if(dados[6]){
                $('#empresa').val(dados[6]);
            }
            
        }
        
    </script>
</section>
@endsection