@extends('adminlte::page')
@section('content')
    <section>
        <div class="ver-relatorio">
            <div class="col">
                <h3 class="titulo-pagina">Ver Relatórios</h3>
            </div>
            <hr>
            <div class="col">
                <h3 class="quantidade">Relatórios {{sizeOf($relatorios)}}</h3>
            </div>
            <table  class="table table-bordered table-striped" style="padding-bottom: 20px">
                @if ($relatorios)
                    @foreach ($relatorios as $relatorio)
                    <tr>
                        <td>
                            {{$relatorio->post_title}} - {{$relatorio->post_excerpt}}<br>
                            <a href="{{route('editar-relatorio-painel',['id'=>$relatorio->id])}}">Editar</a>
                            - <a href="{{route('excluir-relatorio-painel',['id'=>$relatorio->id])}}" onclick="return confirm('Deseje mesmo excluir?')">Excluir</a>
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
