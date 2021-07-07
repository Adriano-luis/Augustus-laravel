@extends('adminlte::page')
@section('content')
    <section>
        <div class="incluir-relatorio">
            <div class="col">
                <h3 class="titulo-pagina">Incluir Relatório</h3>
            </div>
            <hr>

            <form>
                @csrf
                <input type="hidden" name="id" value="{{isset($dados->id) ? $dados->id : ''}}">
                <div class="col">
                    <label class="row label-titulo">Título</label>
                    <input type="text" name="titulo" class="row titulo"
                    placeholder="Ex: ICMS,PIS/COFINS..." value="{{ isset($dados->post_title) ? $dados->post_title : ''}}"><br>
                </div>
                
                <div class="col">
                    <label class="row label-subtitulo">Subtítulo</label>
                    <input type="text" name="subtitulo" class="row subtitulo"
                     placeholder="Ex: Creditamento nas opera..." value="{{ isset($dados->post_excerpt) ? $dados->post_excerpt : ''}}"><br>
                </div>
                <hr>
                
                <div class="row selecao-radios">
                    
                    <div id="radio1-forma" class="col radio">
                        <label>Forma de Recuperação</label>
                        <div class=" row radio">
                            <input type="radio" value="1" {{ isset($dados->forma) && $dados->forma == 1 ? 'checked="checked"' : ''}}>Administrativo
                        </div>
                        <div class=" row radio">
                            <input type="radio" value="2" {{ isset($dados->forma) && $dados->forma == 2 ? 'checked="checked"' : ''}}>Judicial
                        </div>
                        <div class=" row radio">
                            <input type="radio" value="3" {{ isset($dados->forma) && $dados->forma == 3 ? 'checked="checked"' : ''}}>Administrativo/Judicial
                        </div>
                    </div>

                    
                    <div id="radio2-probabilidade" class="col radio">
                        <label>Probabilidade de Êxito</label>
                        <div class=" row radio">
                            <input type="radio" value="1" {{ isset($dados->probabilidade) && $dados->probabilidade == 1 ? 'checked="checked"' : ''}}>Provável
                        </div>
                        <div class=" row radio">
                            <input type="radio" value="2" {{ isset($dados->probabilidade) && $dados->probabilidade == 2 ? 'checked="checked"' : ''}}>Possível
                        </div>
                        <div class=" row radio">
                            <input type="radio" value="3" {{ isset($dados->probabilidade) && $dados->probabilidade == 3 ? 'checked="checked"' : ''}}>Remoto
                        </div>
                    </div>

                   
                    <div id="radio3-tributacao" class="col radio">
                        <label>Tributação</label>
                        <div class=" row radio">
                            <input type="radio" value="1" {{ isset($dados->tributacao) && $dados->tributacao == 1 ? 'checked="checked"' : ''}}>Federal
                        </div>
                        <div class=" row radio">
                            <input type="radio" value="2" {{ isset($dados->tributacao) && $dados->tributacao == 2 ? 'checked="checked"' : ''}}>Estadual
                        </div>
                        <div class=" row radio">
                            <input type="radio" value="3" {{ isset($dados->tributacao) && $dados->tributacao == 3 ? 'checked="checked"' : ''}}>Municipal
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="area-resumo">
                    <label>Resumo</label>
                    <textarea name="resumo" id="resumo-relatorio" style="width: 80%; height:500px">
                        {{ isset($dados->resumo) ? $dados->resumo : ''}}
                    </textarea>
                </div>
                <hr>

                <div class="area-entendendo">
                    <label>Entendendo a Oportunidade</label>
                    <textarea name="entendendo" id="entendendo-relatorio" style="width: 80%; height:500px">
                        {{ isset($dados->entendendo_a_opostunidade) ? $dados->entendendo_a_opostunidade : ''}}
                    </textarea>
                </div>
                <hr>
                
                <div class="area-posicao">
                    <label>Posição dos Tribunais</label>
                    <textarea name="posicao" id="posicao-relatorio" style="width: 80%;height:500px">
                        {{ isset($dados->posicoes_nos_tribunais) ? $dados->posicoes_nos_tribunais : ''}}
                    </textarea>
                </div>
                <hr>
                
                <div class="area-ganho">
                    <label>Estimativa de Ganho</label>
                    <textarea name="ganho" id="ganho-relatorio" style="width: 80%; height:500px">
                        {{ isset($dados->estimativa_de_ganho) ? $dados->estimativa_de_ganho : ''}}
                    </textarea>
                </div>

                <input type="text" class="proxima" id="enviarRelatorio" value="Salvar">
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
