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
                                <div class="row titulo">
                                    <h6>Dados da empresa:</h6>
                                </div>
                                <div class="row dados-1">
                                    ...
                                </div>
                                <div class="row dados-2">
                                    ...
                                </div>
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
</section>
@endsection