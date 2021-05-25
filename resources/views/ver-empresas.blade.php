@extends('layouts.basico')

@section('conteudo')
<section class="ver-empresas">
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
                            <div class="col-sm-6 cadastradas">
                                <div class="row">
                                    <img class="img-cadastradas" src="{{asset('/images/icon-Empresa.svg')}}">
                                    <h1>{{$qtEmpresas}}</h1>
                                    <div class="info-cadastradas">
                                        Empresas cadastradas
                                    </div>
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
                                Cadastre sua empresa e descubra quais <span>oportunidades tributárias</span>, tanto juridicas como admistrativas sua empresa possui.
                            </div>
                        </div>
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
                        <input  class="pesquisa" type="text" name="pesquisa" placeholder="Pesquise por uma empresa" /><a href=""><img  class="lupa" src="{{asset('/images/lupa.svg')}}"></a>
                    </form>
                </div>
                <div class="col ordenar">
                    <div class="ordem">
                        <label>Ordernar por:</label>
                        <select>
                            <option value="0"></option>
                            <option value="1"><img src="{{asset('/images/icon-Order.svg')}}">Alfabética</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="cartoes">
                <?php $cont = 0; ?>
                @foreach ($dadosEmpresa as $dado)
                <div class="row cartao">
                    <div class="col-sm-4 opcoes">
                        <div class="nome">
                            <span>Nome da Empresa</span>
                            <h4>{{$dado->nome}}</h4>
                        </div>
                        <hr>
                        <div class="row menus">
                        <div class="col par-1">
                            <div class="visualizar"><a href=""><img src="{{asset('/images/icon-Visualizar.svg')}}">Visualizar</a></div>
                            <div class="relatorios"><a href=""><img src="{{asset('/images/icon-Relatorios.svg')}}">Relatórios</a></div>
                        </div>
                        <div class="col par-2">
                            <div class="editar"><a href="" id="link-editar"><img src="{{asset('/images/icon-Editar.svg')}}">Editar</a></div>
                            <div class="excluir"><a href="" id="link-excluir"><img src="{{asset('/images/icon-Excluir.svg')}}">Excluir</a></div>
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
                                DAS INFORMAÇÕES<br/> FORNECIDAS
                            </div>
                        </div>
                        <div class="progress">
                            <div id="barra-{{$cont}}"class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="atualizar"><a href="">Atualizar informações</a></div>
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
                            <div class="ver"><a href="">Ver oportunidades</a></div>
                        </div>
                    </div>
                </div>
                <?php $cont++ ?>
                @endforeach
            </div>
        </div>
        <div class="paginacao">
        
        </div><br/><br/>
        <div class="marca">
            <img src="{{asset('/images/img-augustus-fundo.png')}}">
        </div>
    </div>
    <div id="modal-editar" class="modal-container editr">
        <div class="m-editar">
            <button class="fechar">x</button>
            <h2>Entre em contato conosco</h2>
            <form>
                <div class="row">
                    <input type="text" name="nome" placeholder="Nome">
                </div>
                <div class="row">
                    <input type="email" name="email" placeholder="E-mail">
                </div>
                <div class="row">
                    <input type="text" name="assunto" placeholder="Assunto">
                </div>
                <div class="row">
                    <textarea name="mensagem"  cols="30" rows="10" placeholder="Mensagem"></textarea>
                </div>
                <div class="row">
                    <input type="submit" value="Enviar">
                </div>
                <div class="row">
                    <span>Ou nos envie um email:<br/> contato@revisefacil.com.br</span>
                </div>
            </form>
        </div>
    </div>
    <div id="modal-excluir" class="modal-container excluir">
        <div class="m-excluir">
            <button class="fechar" id="fechar">x</button>
            <div class="row title">
                Você esta prestes a excluir a empresa:
                <h5>Empresa fictícia 001</h5>
            </div>
            <form>
                <div class="row">
                    <label for="fechar"><div class="cancelar">Não</div></label>
                    <div class="excluir">Excluir</div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection