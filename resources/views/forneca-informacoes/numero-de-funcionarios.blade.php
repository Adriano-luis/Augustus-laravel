@extends('forneca-informacoes')

@section('numero-de-funcionarios')
    <!-- TELA 1 -->
    <input type="hidden" name="aba-nome" value="funcionarios">
    <input type="hidden" name="idEmpresa" value="{{$_SESSION['idEmpresa']}}">
    <input type="hidden" name="cont" value="{{$_SESSION['cont']}}">
    <section id="funcionarios-tela-1">
        <?php 
            $pergunta1 = $perguntas->where('id',357);


            
            $resposta=$respostas->where('id',1244);
            $resposta=$respostas->where('id',358);
            $resposta=$respostas->where('id',359);
            $resposta=$respostas->where('id',360);
            $resposta=$respostas->where('id',361);
            $resposta=$respostas->where('id',362);

            /*
            $listaRespostas1 = [$respostas[138]->id,$respostas[37]->id,$respostas[27]->id,$respostas[29]->id,
            $respostas[23]->id,$respostas[33]->id,$respostas[36]->id,$respostas[32]->id,$respostas[22]->id,
            $respostas[31]->id,$respostas[28]->id,$respostas[38]->id];*/
           
            
        ?>
        <div class="progress" style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
            <div class="num-progresso-1">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 6.33%" aria-valuenow="4.33" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
        </div>

        <div class="col checkbox-funcionarios">
            <div class="row radio-funcionarios">
                <div class="col">
                    <h6>{{$pergunta3[11]->post_title}}</h6>
                    <div class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[158]->id}}">Sim
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[64]->id}}">Não
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[65]->id}}">sim
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[66]->id}}">não
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[67]->id}}">sim
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[68]->id}}">Não
                        </div>
                    </div>    
                </div>
            </div>
        </div>

        <div class="proxima next-funcionarios-1">Próxima</div>
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
                <?php $pergunta = $perguntas->where('id',357)?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta[11]->post_title}}</p>
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
        </div>   

        <div class="anterior previous-final">Voltar</div><div class="proxima next-final">Próxima</div>
    </section>
@endsection