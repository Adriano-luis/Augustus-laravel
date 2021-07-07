@extends('adminlte::page')
@section('content')
    <section>
        <div class="incluir-noticias">
            <div class="col">
                <h3 class="titulo-pagina">Incluir Noticia</h3>
            </div>
            <hr>

            <form action="{{route('incluir-noticias-painel')}}" method="POST" enctype="multipart/form-data" accept=".jpg,.png,.svg">
                @csrf
                <input type="hidden" name="id" value="{{isset($dados->ID) ? $dados->ID : ''}}">
                <div class="col">
                    <label class="row label-titulo">Título</label>
                    <input type="text" name="titulo" class="row titulo"
                    placeholder="Ex: RETENÇÃO DE INSS NÃO SE..." value="{{ isset($dados->post_title) ? $dados->post_title : ''}}"><br>
                </div>
                <hr>

                <label for="enviar">Escolher Foto da Noticia</label>
                <div class="area-imagem">
                    <input id="enviar" type="file" name="imagem">
                </div>
                <hr>

                <div class="area-descricao">
                    <label>Descrição</label>
                    <textarea  name="descricao" style="width: 90%; height:500px disabled">
                        {{ isset($dados->post_content) ? $dados->post_content : ''}}
                    </textarea>
                </div>

                <input type="submit" class="proxima" value="Salvar">
            </form>
        </div>
    </section>
@endsection
@section('css')						
    <link rel="stylesheet" type="text/css" href="{{asset('/css/painel.css')}}"/>
@endsection
@section('js')
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    <script src="{{asset('/js/painel.js')}}" type="text/javascript"></script>
@endsection
