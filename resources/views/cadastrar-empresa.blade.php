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
                <div class="form" action="" method="POST">
                    <form method="POST" >
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
                            <select name="estado" placeholder="Estado com filiais">
                                <option value="SP">SP</option>
                                <option value="PR">PR</option>
                                <option value="AM">AM</option>
                                <option value="RJ">RJ</option>
                            </select>
                            <select name="societario" placeholder="tipo societário">
                                <option value="">teste 1</option>
                                <option value="">teste 2</option>
                                <option value="">teste 3</option>
                                <option value="">teste 4</option>
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