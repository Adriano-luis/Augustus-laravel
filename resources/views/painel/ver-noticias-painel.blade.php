@extends('adminlte::page')
@section('content')
    <section>
        <div class="ver-noticias">
            <div class="col">
                <h3 class="titulo-pagina">Ver Noticias</h3>
            </div>
            <h1>{{isset($mensagem) ? $mensagem : ''}}</h1>
            <hr>
            <div class="col">
                <h3 class="quantidade">Noticias {{sizeOf($noticias)}}</h3>
            </div>
            <table  class="table table-bordered table-striped" style="padding-bottom: 20px">
                @if ($noticias)
                    @foreach ($noticias as $noticia)
                    <tr>
                        <td>
                            {{$noticia->post_title}}<br>
                            <a href="{{route('editar-noticias-painel',['id'=>$noticia->ID])}}">Editar</a>
                            - <a href="{{route('excluir-noticias-painel',['id'=>$noticia->ID])}}" onclick="return confirm('Deseje mesmo excluir?')">Excluir</a>
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
