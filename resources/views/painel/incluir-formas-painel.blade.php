@extends('adminlte::page')
@section('content')
    <section>
        <div class="incluir-forma">
            <div class="col">
                <h3 class="titulo-pagina">Incluir Formas de Aproveitamento</h3>
            </div>
            <hr>

            <form>
                @csrf
                <input type="hidden" name="id" value="{{isset($dados->id) ? $dados->id : ''}}">
                <div class="col">
                    <label class="row label-titulo">Título</label>
                    <input type="text" name="titulo" class="row titulo"
                    placeholder="Ex: 13 - Compensação Administrativa..." value="{{ isset($dados->titulo) ? $dados->titulo : ''}}"><br>
                </div>
                
                <div class="col">
                    <label class="row label-relatorio">Relátorio</label>
                    <select name="relatorio" id="" class="row relatorio">
                        <option value="{{ isset($relatorio->id) ? $relatorio->id : ''}}">
                            {{ isset($relatorio->post_excerpt) ? $relatorio->post_title.'-'.$relatorio->post_excerpt : ''}}
                        </option>
                        @foreach ($relatorios as $item)
                            <option value="{{$item->id}}">{{$item->post_title.'-'.$item->post_excerpt}}</option>
                        @endforeach
                    </select><br>
                </div>
                <hr>

                <label>Chance de Êxito</label><br>
                <div class="row selecao-radios">
                    <div id="radio1-chance" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="1" {{ isset($dados->chance_de_exito) && $dados->chance_de_exito == 1 ? 'checked="checked"' : ''}}>Baixa
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="2" {{ isset($dados->chance_de_exito) && $dados->chance_de_exito == 2 ? 'checked="checked"' : ''}}>Média
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="3" {{ isset($dados->chance_de_exito) && $dados->chance_de_exito == 3 ? 'checked="checked"' : ''}}>Alta
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="4" {{ isset($dados->chance_de_exito) && $dados->chance_de_exito == 4 ? 'checked="checked"' : ''}}>Muito Alta
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="area-descricao">
                    <label>Descrição</label>
                    <textarea name="descricao" id="descricao-forma" style="width: 80%; height:500px">
                        {{ isset($dados->descricao) ? $dados->descricao : ''}}
                    </textarea>
                </div>
                <hr>

                <div class="area-vantagens">
                    <label>Vantagens</label>
                    <textarea name="vantagens" id="vantagens-forma" style="width: 80%; height:500px">
                        {{ isset($dados->vantagens) ? $dados->vantagens : ''}}
                    </textarea>
                </div>
                <hr>
                
                <div class="area-desvantagens">
                    <label>Desvantagens</label>
                    <textarea name="desvantagens" id="desvantagens-forma" style="width: 80%;height:500px">
                        {{ isset($dados->desvantagens) ? $dados->desvantagens : ''}}
                    </textarea>
                </div>
                <hr>
                
                <div class="area-risco">
                    <label>Análise de Risco</label>
                    <textarea name="risco" id="risco-forma" style="width: 80%; height:500px">
                        {{ isset($dados->risco) ? $dados->risco : ''}}
                    </textarea>
                </div>

                <div class="area-documentos">
                    <label>Documentos</label>
                    <textarea name="documentos" id="documentos-forma" style="width: 80%; height:500px">
                        {{ isset($dados->documentos) ? $dados->documentos : ''}}
                    </textarea>
                </div>

                <input type="text" class="proxima" id="enviarForma" value="Salvar">
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
