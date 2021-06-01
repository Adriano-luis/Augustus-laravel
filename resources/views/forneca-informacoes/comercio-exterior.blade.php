@extends('forneca-informacoes')

@section('comercio')
    <!-- TELA 1 -->
    <input type="hidden" name="aba-nome" value="comercio">
    <input type="hidden" name="idEmpresa" value="{{$_SESSION['idEmpresa']}}">
    <input type="hidden" name="cont" value="{{$_SESSION['cont']}}">
    <section id="comercio-tela-1">
        <?php 
            $pergunta = $perguntas->where('id',382);
            $pergunta = $perguntas->where('id',281);


            
            /*$resposta=$respostas->where('id',243);
            $resposta=$respostas->where('id',244);
            $resposta=$respostas->where('id',0);

            $resposta=$respostas->where('id',272);
            $resposta=$respostas->where('id',355);
            $resposta=$respostas->where('id',354);
            $resposta=$respostas->where('id',353);

            $resposta=$respostas->where('id',298);
            $resposta=$respostas->where('id',299);

            $resposta=$respostas->where('id',364);
            $resposta=$respostas->where('id',373);


            $listaRespostas1 = [$respostas[138]->id,$respostas[37]->id,$respostas[27]->id,$respostas[29]->id,
            $respostas[23]->id,$respostas[33]->id,$respostas[36]->id,$respostas[32]->id,$respostas[22]->id,
            $respostas[31]->id,$respostas[28]->id,$respostas[38]->id];*/
           
            
        ?>

        <div class="progress" style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
            <div class="num-progresso-1">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 6.33%" aria-valuenow="4.33" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
        </div>

        <div class="col checkbox-comercio">
            <div class="row radio-comercio">
                <div class="col">
                    <h6>{{$pergunta[15]->post_title}}</h6>
                    <select name="regime" class="select">
                        <option value="{{$resposta[]->id}}">Escolha uma opção</option>
                        <option value="{{$resposta[]->id}}">Lucro Real</option>
                        <option value="{{$resposta[]->id}}">Lucro Presumido</option>
                        <option value="{{$resposta[]->id}}">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-comercio">
                <div class="col">
                    <h6>{{$pergunta[4]->post_title}}</h6>
                    <select name="5anos" class="select">
                        <option value="{{$resposta[]->id}}">Escolha uma opção</option>
                        <option value="{{$resposta[]->id}}">Lucro Real</option>
                        <option value="{{$resposta[]->id}}">Lucro Presumido</option>
                        <option value="{{$resposta[]->id}}">Simples Nacional</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="proxima next-comercio-1">Próxima</div>
    </section>

      <!-- TELA Final -->
    <section id="tributacao-tela-final">
        <div class="topo-tributacao-final">
            <img src="{{asset('images/icon-Info-Cadastradas.svg')}}">
            <h3>Informações cadastradas</h3>
            <p>Sobre tributacao</p>
        </div>
        <div class="row tributacao-final">
            <div class="col">
                <?php $pergunta = $perguntas->where('id',382)?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta[15]->post_title}}</p>
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div> 
            </div>
            <div class="col">
                <?php $pergunta = $perguntas->where('id',281) ?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta[4]->post_title}}</p>   
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas3))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div>
            </div>
        </div>   

        <div class="anterior previous-final">Voltar</div><div class="proxima next-final">Próxima</div>
    </section>
@endsection