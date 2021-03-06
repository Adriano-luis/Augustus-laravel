@extends('layouts.basico')

@section('conteudo')
<section class="home">
    <div class="container-fluid fundo">
        <div class="mix">
            <div class="row">
                <div class="col-sm-7">
                    <div class="bemvindo">
                        <div class="infos">
                            <div class="row">
                                <div class="title">
                                    <h4>Seja bem vindo(a)!</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 cadastradas">
                                    <img class="img-cadastradas" src="{{asset('/images/icon-Empresa.svg')}}">
                                    <div class="info-cadastradas">
                                        <h2>{{$qtEmpresas}}</h2>
                                        Empresas Cadastradas
                                    </div>
                                    <a href="{{ route('ver-empresas')}}">
                                        <div class="col botao-cadastradas">
                                            Ver empresas
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 geradas">
                                    <img class="img-geradas" src="{{asset('/images/icon-Estrela-Oportunidade.svg')}}">
                                    <div class="info-geradas">
                                        <h2>{{$totalOportunidades}}</h2>
                                        Oportunidades Geradas
                                    </div>
                                    <a href="{{ route('dashboard')}}">
                                        <div class="col botao-geradas">
                                            Ver oportunidades
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cadastrar">
                        <div class=" row colunas">
                            <a href="{{route('nova-empresa')}}">
                                <div class="col botao">
                                    Cadastrar nova empresa
                                </div>
                            </a>
                            <div class="col info">
                                Cadastre sua empresa e descubra quais <span>Oportunidades Tribut??rias</span>, tanto juridicas como admistrativas sua empresa possui.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="noticias">
                        <div class="title">
                            <h4>Seja bem-vindo</h4>
                        </div>
                        @foreach ($noticias as $noticia)
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{asset('/images/foto3.jpg')}}" class="img">
                                </div>
                                <div class="col-sm-6">
                                    <div class="teste"><span class="title">{{$noticia->post_title}}</span><br/></div>
                                    <span><a href="{{route('noticia',['id'=>$noticia->ID])}}">Leia mais</a></span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="empresas">
            <div class="row topo">
                <div class="col titulo">
                    <h4>Empresas cadastradas</h4>
                </div>
                <div class="col pesquisa">
                    <form>
                        <input  class="pesquisa" type="text" name="pesquisa" placeholder="Pesquise por uma empresa" />
                        <input  class="lupa" type="submit" value="">
                        <img class="lupa-img" src="{{asset('/images/lupa.svg')}}">
                   
                </div>
                <div class="col ordenar">
                    <div class="ordem">
                        <label>Ordernar por:</label>
                        <select name="ordem">
                            <option ></option>
                            <option value="asc"><img src="{{asset('/images/icon-Order.svg')}}">Alfab??tica</option>
                        </select>
                    </div>
                    </form>
                </div>
            </div>
            <div class="cartoes">
                <?php $cont = 0; ?>
                @foreach ($dadosEmpresa as $dado)
                <input type="hidden" id="dad" value="{{$dado}}">
                <div class="row cartao">
                    <div class="col-sm-4 opcoes">
                        <div class="nome">
                            <span>Nome da Empresa</span>
                            <h4>{{$dado->nome}}</h4>
                        </div>
                        <hr>
                        <div class="row menus">
                        <div class="col par-1">
                            <div class="visualizar"><a href="{{route('visualizar',['id'=>$dado->id,'cont'=>$cont])}}"><img src="{{asset('/images/icon-Visualizar.svg')}}">Visualizar</a></div>
                            <div class="relatorios"><a href="{{route('relatorios',['id'=>$dado->id,'cont'=>$cont])}}"><img src="{{asset('/images/icon-Relatorios.svg')}}">Relat??rios</a></div>
                        </div>
                        <div class="col par-2">
                            <div class="editar"><a href="" data-toggle="modal" data-target="#modal-editar" onclick="setDadosAtualizar('{{$dado->nome}},{{$dado->cnpj}},{{$dado->ano}},{{$dado->cidade}},{{$dado->estado}},{{$dado->tipo}},{{$dado->id}}')">
                                <img src="{{asset('/images/icon-Editar.svg')}}">Editar</a>
                            </div>
                            <div class="excluir"><a href="" data-toggle="modal" data-target="#modal-excluir" onclick="setDadosExcluir('{{$dado->nome}}')">
                                <img src="{{asset('/images/icon-Excluir.svg')}}">Excluir</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4 info">
                        <div class="row dados">
                            <img src="{{asset('/images/icon-informacoes.svg')}}">
                            <div class="porcentagem-info">
                                <h3 id="porcentagem">{{round($porcentagemConcluido[$cont])}}%</h3>
                            </div>
                            <div class="info-texto">
                                DAS INFORMA????ES<br/> FORNECIDAS
                            </div>
                        </div>
                        <div class="progress">
                            <div id="barra-{{$cont}}"class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="atualizar"><a href="{{route('forneca-informacoes',['id'=>$dado->id,'cont'=>$cont])}}">Atualizar informa????es</a></div>
                    </div>
                    <div class="col-sm-4 oportunidades">
                        <div class="row dados">
                            <img src="{{asset('/images/icon-Oportunidades.svg')}}">
                            <div class="porcentagem-opo">
                                <h3>{{$oportunidades[$cont]}}</h3>
                            </div>
                            <div class="opo-texto">
                                OPORTUNIDADES<br/> GERADAS
                            </div>
                            <div class="ver"><a href="{{route('oportunidades',['id'=>$dado->id,'cont'=>$cont])}}">Ver oportunidades</a></div>
                        </div>
                    </div>
                </div>
                <?php $cont++ ?>
                @endforeach
            </div>
        </div>
        <div class="paginacao">
            {{$dadosEmpresa->links()}}
        </div><br/><br/>
        <div class="marca">
            <img src="{{asset('/images/img-augustus-fundo.png')}}">
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
                        <input type="text" name="razao" value="" placeholder="Raz??o Social"/>
                    </div>
                    <div class="row">
                        <input type="text" name="cnpj" placeholder="CNPJ"/><br/>
                    </div>
                    <div class="row mini">
                        <input type="text" name="ano" placeholder="Ano de constitui????o" />
                        <input type="text" name="cidade" placeholder="Cidade sede" />
                    </div>
                    <div class="row">
                        <select id="estado" name="estado">
                            <option>Estado com filiais</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amap??</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Cear??</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Esp??rito Santo</option>
                            <option value="GO">Goi??s</option>
                            <option value="MA">Maranh??o</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Par??</option>
                            <option value="PB">Para??ba</option>
                            <option value="PR">Paran??</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piau??</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rond??nia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">S??o Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                        <select id="societario" name="societario">
                            <option>Tipo Societ??rio</option>
                            <option value="Sociedade Limitada">Sociedade Limitada</option>
                            <option value="Sociedade An??nima">Sociedade An??nima</option>
                            <option value="Sociedade em Nome Coletivo">Sociedade em Nome Coletivo</option>
                            <option value="Sociedade em Comandita Simples">Sociedade em Comandita Simples</option>
                            <option value="Sociedade em Comandita por A????es">Sociedade em Comandita por A????es</option>
                            <option value="MEI">MEI</option>
                            <option value="Empres??rio Individual">Empres??rio Individual</option>
                            <option value="EIRELI">EIRELI</option>
                        </select>
                    </div>
                    <input type="submit"  value="Salvar Altere????es"/>
                </form>
            </div>
        </div>
    </div>
    <div id="modal-excluir" class="modal-container excluir">
        <div class="m-excluir">
            <div class="row title">
                Voc?? esta prestes a excluir a empresa:
                <form action="{{route('excluir')}}" method="POST">
                    @csrf
                    <input type="text" id="dadoTitulo" value="" disabled>
            </div>
            <div class="row">
                <label for="fechar"><div class="cancelar">N??o</div></label>
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
