@extends('forneca-informacoes')

@section('tributacao')
    <!-- TELA 1 -->
    <section id="tributacao-tela-1">
        <?php 
            $pergunta = $perguntas->where('id',242);
            $pergunta = $perguntas->where('id',352);
            $pergunta = $perguntas->where('id',455);
            $pergunta = $perguntas->where('id',785);

            
            $resposta=$respostas->where('id',791);
            $resposta=$respostas->where('id',324);
            $resposta=$respostas->where('id',314);
            $resposta=$respostas->where('id',316);
            $resposta=$respostas->where('id',308);
            $resposta=$respostas->where('id',320);
            $resposta=$respostas->where('id',323);
            $resposta=$respostas->where('id',319);
            $resposta=$respostas->where('id',307);
            $resposta=$respostas->where('id',318);
            $resposta=$respostas->where('id',315);
            $resposta=$respostas->where('id',325);

            $listaRespostas1 = [$respostas[138]->id,$respostas[37]->id,$respostas[27]->id,$respostas[29]->id,
            $respostas[23]->id,$respostas[33]->id,$respostas[36]->id,$respostas[32]->id,$respostas[22]->id,
            $respostas[31]->id,$respostas[28]->id,$respostas[38]->id];
           
            
        ?>
        <h4>{{$pergunta[8]->post_title}}</h4>   
        <p>Passo 1 de 4</p>

        <div class="progress" style="height: 4px; overflow:visible;margin-top:40px">
            <div class="num-progresso-1">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 4.33%" aria-valuenow="4.33" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso-2">2</div>
            <div class="num-progresso-3">3</div>
            <div class="num-progresso-4">4</div>
        </div>

        <form action="{{route('indexPost')}}">
            <div class="row checkbox-tributacao">
                <div class="col">
                    <div class="check-option"><input name="check-1" name="check-1" class="check-option-" type="checkbox"value="{{$respostas[138]->id}}"><span>{{$respostas[138]->post_title}}</span></div>
                    <div class="check-option"><input name="check-1" class="check-option-" type="checkbox"value="{{$respostas[37]->id}}"><span>{{$respostas[37]->post_title}}</span></div>
                    <div class="check-option"><input name="check-1" class="check-option-" type="checkbox"value="{{$respostas[27]->id}}"><span>{{$respostas[27]->post_title}}</span></div>
                    <div class="check-option"><input name="check-1" class="check-option-" type="checkbox"value="{{$respostas[29]->id}}"><span>{{$respostas[29]->post_title}}</span></div>
                    <div class="check-option"><input name="check-1" class="check-option-" type="checkbox" value="{{$respostas[23]->id}}"><span>{{$respostas[23]->post_title}}</span></div>
                    <div class="check-option"><input name="check-1" class="check-option-" type="checkbox"value="{{$respostas[33]->id}}"><span>{{$respostas[33]->post_title}}</span></div>
                </div>
                <div class="col">
                    <div class="check-option"><input name="check-1" class="check-option-" type="checkbox"value="{{$respostas[36]->id}}"><span>{{$respostas[36]->post_title}}</span></div>
                    <div class="check-option"><input name="check-1" class="check-option-" type="checkbox"value="{{$respostas[32]->id}}"><span>{{$respostas[32]->post_title}}</span></div>
                    <div class="check-option"><input name="check-1" class="check-option-" type="checkbox"value="{{$respostas[22]->id}}"><span>{{$respostas[22]->post_title}}</span></div>
                    <div class="check-option"><input name="check-1" class="check-option-" type="checkbox"value="{{$respostas[31]->id}}"><span>{{$respostas[31]->post_title}}</span></div>
                    <div class="check-option"><input name="check-1" class="check-option-" type="checkbox"value="{{$respostas[28]->id}}"><span>{{$respostas[28]->post_title}}</span></div>
                    <div class="check-option"><input name="check-1" class="check-option-" type="checkbox"value="{{$respostas[38]->id}}"><span>{{$respostas[38]->post_title}}</span></div>
                </div>
            </div>

        <div class="proxima next-1">Próxima</div>
    </section>


    <!-- TELA 2 -->
    <section id="tributacao-tela-2">
        <?php
            $pergunta = $perguntas->where('id',313); 
            
            $resposta=$respostas->where('id',1245);
            $resposta=$respostas->where('id',339);
            $resposta=$respostas->where('id',330);
            $resposta=$respostas->where('id',332);
            $resposta=$respostas->where('id',321);
            $resposta=$respostas->where('id',336);
            $resposta=$respostas->where('id',338);
            $resposta=$respostas->where('id',335);
            $resposta=$respostas->where('id',317);
            $resposta=$respostas->where('id',334);
            $resposta=$respostas->where('id',331);
            $resposta=$respostas->where('id',340);

            $listaRespostas2 = [$respostas[159]->id,$respostas[48]->id,$respostas[39]->id,$respostas[41]->id,
            $respostas[34]->id,$respostas[45]->id,$respostas[47]->id,$respostas[44]->id,$respostas[30]->id,
            $respostas[43]->id,$respostas[40]->id,$respostas[49]->id];

            foreach ($respostasEmpresa as $value) {
                if (in_array($value->id,$listaRespostas2)) {
                }
            }
        ?>
        <h4>{{$pergunta[7]->post_title}}</h4>   
        <p>Passo 2 de 4</p>

        <div class="progress" style="height: 4px; overflow:visible;margin-top:40px">
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-1" ></div>
            <div class="progress-bar color-perguntas-verde" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso-2">2</div>
            <div class="num-progresso-3">3</div>
            <div class="num-progresso-4">4</div>
        </div>

            <div class="row checkbox-tributacao">
                <div class="col">
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[159]->id}}"><span>{{$respostas[159]->post_title}}</span></div>
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[48]->id}}"><span>{{$respostas[48]->post_title}}</span></div>
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[39]->id}}"><span>{{$respostas[39]->post_title}}</span></div>
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[41]->id}}"><span>{{$respostas[41]->post_title}}</span></div>
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[34]->id}}"><span>{{$respostas[34]->post_title}}</span></div>
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[45]->id}}"><span>{{$respostas[45]->post_title}}</span></div>
                </div>
                <div class="col">
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[47]->id}}"><span>{{$respostas[47]->post_title}}</span></div>
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[44]->id}}"><span>{{$respostas[44]->post_title}}</span></div>
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[30]->id}}"><span>{{$respostas[30]->post_title}}</span></div>
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[43]->id}}"><span>{{$respostas[43]->post_title}}</span></div>
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[40]->id}}"><span>{{$respostas[40]->post_title}}</span></div>
                    <div class="check-option"><input name="check-2" class="check-option-" type="checkbox"value="{{$respostas[49]->id}}"><span>{{$respostas[49]->post_title}}</span></div>
                </div>
            </div>
        
        <div class="anterior previous-2">Voltar</div><div class="proxima next-2">Próxima</div>
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
                <?php $pergunta = $perguntas->where('id',329)?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta[8]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach

                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div> 

                <?php $pergunta = $perguntas->where('id',313) ?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta[7]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div> 
            </div>
            <div class="col">
                <?php $pergunta = $perguntas->where('id',302) ?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta[6]->post_title}}</p>   
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas3))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div>
                <?php $pergunta = $perguntas->where('id',341) ?>
                <div class="tributacao-final-resposta"> 
                    <p>{{$pergunta[9]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas4))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div> 
            </div>
        </div>   

        <div class="anterior previous-final">Voltar</div><div class="proxima next-final">Próxima</div>
    </section>
@endsection