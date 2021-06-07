@extends('layouts.basico')

@section('conteudo')
    <section class="cadastro">
        <div class="banner">
            <div class="row">
                <div class="col-sm icone">
                    <img src="{{asset('/images/icon-Outros.svg')}}" />
                </div>
                <div class="col-sm-10 info">
                    <p>Cadastre sua empresa e descubra<br/> quais <span>oportunidades tributárias</span>,
                        tanto<br/> juridicas como admistrativas sua empresa possui.</p>
                </div>
                <div class="form" >
                    <form action="{{route('nova-empresa')}}" method="POST" >
                        @csrf
                        <label>Cadastrar uma nova empresa</label>
                        <div class="row">
                            <input type="text" name="razao" placeholder="Razão Social"/>
                        </div>
                        <div class="row">
                            <input type="text" name="cnpj" placeholder="CNPJ"/><br/>
                        </div>
                        <div class="row mini">
                            <input type="text" name="ano" placeholder="Ano de constituição" />
                            <input type="text" name="cidade" placeholder="Cidade sede" />
                        </div>
                        <div class="row">
                            <select name="estado">
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
                            <select name="societario">
                                <option>Tipo Societário</option>
                                <option value="Sociedade limitada">Sociedade limitada</option>
                                <option value="Sociedade anônima">Sociedade anônima</option>
                                <option value="Sociedade em nome coletivo">Sociedade em nome coletivo</option>
                                <option value="Sociedade em Comandita Simples">Sociedade em Comandita Simples</option>
                                <option value="Sociedade em Comandita por ações">Sociedade em Comandita por ações</option>
                                <option value="MEI">MEI</option>
                                <option value="Empresário individual">Empresário individual</option>
                                <option value="EIRELI">EIRELI</option>
                            </select>
                        </div>
                        <input type="submit"  value="Cadastrar Empresa"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="fundo">
            
        </div>
    </section>
@endsection