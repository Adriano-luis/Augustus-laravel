@extends('adminlte::page')
@section('content')
    <section>
        <div class="empresas">
            <div class="col">
                <h3 class="titulo-pagina">Empresas Cadastradas</h3>
            </div>
            <h1>{{isset($mensagem) ? $mensagem : ''}}</h1>
            <h1>{{isset($msg) ? $msg : ''}}</h1>
            <hr>
            <div class="col">
                <h3 class="quantidade">Empresas {{sizeOf($empresas)}}</h3>
            </div>
            <table  class="table table-bordered table-striped" style="padding-bottom: 20px">
                <tr>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Criada em</th>
                    <th>Sede</th>
                    <th>Filiais</th>
                    <th>Tipo</th>
                    <th>Excluir</th>
                    <th>Demo</th>
                </tr>
                @if ($empresas)
                    @foreach ($empresas as $empresa)
                    <tr>
                        <td>
                            {{$empresa->nome}}
                        </td>
                        <td>
                            {{$empresa->cnpj}}
                        </td>
                        <td>
                            {{$empresa->ano}}
                        </td>
                        <td>
                            {{$empresa->cidade}}
                        </td>
                        <td>
                            {{$empresa->estado}}
                        </td>
                        <td>
                            {{$empresa->tipo}}
                        </td>
                        <td>
                            <a href="{{route('excluir-empresas-painel',['id'=>$empresa->id])}}" style="color: red" onclick="return confirm('Deseje mesmo excluir?')">Excluir</a>
                        </td>
                        <td>
                            <a href="{{route('demo-empresas-painel',['id'=>$empresa->id])}}">Colocar</a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </table>
            <div class="espaco" style="padding-bottom: 50px"></div>
        </div>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/painel.css')}}"/>
@endsection
