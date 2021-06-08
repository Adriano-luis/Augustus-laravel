@extends('layouts.basico')

@section('conteudo')
<section class="empresa-visualizar">
    <div class="container-fluid fundo">
        <div class="mix">
            <div class="row">
                <div class="col container-fluid">
                    <div class="empresas-visualizar">
                        <div class="row">
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
                                ...
                            </div>
                            <div class="col-sm-4">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-visualizar">
            <div class="row">
                <div class="col-sm-8">
                    ...
                </div>
                <div class="col-sm-4">
                    ...
                </div>
            </div>
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