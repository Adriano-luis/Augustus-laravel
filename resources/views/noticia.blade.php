@extends('layouts.basico')

@section('conteudo')
<section class="noticia">
    <div class="banner">
        <div class="row area">
            <div class="col-sm-10 bot">
                <div class="botao-noticias" ><a href="{{route('noticias')}}">NOTÍCIAS</a></div>
            </div>
            <div class="row">
                <div class="col-sm-10 info">
                    <h4>{{$Noticia[0]->post_title}}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 date">
                    <?php
                        $date = new DateTime($Noticia[0]->post_date);
                        echo $date->format('d/m/y');
                    ?>
                </div>
            </div>
            <div class="form desc">
                <div class="row">
                    <div class="col-sm-12">
                        <img class="img-noticia" src="{{$Noticia[0]->guid != '' ? asset('/storage/noticias/'.$Noticia[0]->guid) : asset('/images/foto3.jpg')}}">
                        <div style="max-width: 679px;">
                            {{$Noticia[0]->post_content}}
                        </div>
                    </div>
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