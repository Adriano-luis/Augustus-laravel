@extends('layouts.basico')

@section('conteudo')
<section class="noticias">
    <div class="banner">
        <div class="row area">
            <div class="col-sm-1 icone">
                <img src="{{asset('/images/icon-Noticias.svg')}}" />
            </div>
            <div class="col-sm-10 info">
                <h2>Notícias</h2>
            </div>
            <div class="form desc">
                <div class="row">
                    @foreach ($Noticias as $item)
                    <div class="col-sm-4">
                        <img src="{{asset('/images/foto3.jpg')}}">
                        <h4>{{$item->post_title}}</h4>
                        <span><a href="{{route('noticia',['id'=>$item->ID])}}">Leia mais</a></span>
                    </div>
                    @endforeach
                </div>
                <div class="paginacao">
                    {{$Noticias->links()}}
                </div>
            </div>
        </div>
    </div>
    <div class="fundo">
        
    </div>
    <div class="marca">
        <img src="{{asset('/images/img-augustus-fundo.png')}}">
    </div>
</section>
@endsection