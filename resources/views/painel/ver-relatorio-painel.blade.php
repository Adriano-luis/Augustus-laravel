@extends('adminlte::page')
@section('content')
    <section>
        <div class="ver-relatorio">
            <table  class="table table-bordered table-striped">
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
        </div>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/painel.css')}}"/>
@endsection
