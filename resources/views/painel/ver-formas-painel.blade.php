@extends('adminlte::page')
@section('content')
    <section>
        <div class="ver-formas">
            <div class="col">
                <h3 class="titulo-pagina">Ver Formas de Aproveitamento</h3>
            </div>
            <h1>{{isset($mensagem) ? $mensagem : ''}}</h1>
            <hr>
            <div class="col">
                <h3 class="quantidade">Formas de Aproveitamento {{sizeOf($formas)}}</h3>
            </div>
            <table  class="table table-bordered table-striped" style="padding-bottom: 20px">
                @if ($formas)
                    @foreach ($formas as $forma)
                    <tr>
                        <td>
                            {{$forma->titulo}}<br>
                            <a href="{{route('editar-formas-painel',['id'=>$forma->id])}}">Editar</a>
                            - <a href="{{route('excluir-formas-painel',['id'=>$forma->id])}}" onclick="return confirm('Deseje mesmo excluir?')">Excluir</a>
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
