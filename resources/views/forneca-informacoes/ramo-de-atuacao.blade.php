@extends('forneca-informacoes')

@section('ramo-de-atuacao')
    <!-- TELA 1 -->
    <section id="ramo-tela-1">
        <?php 
            $pergunta = $perguntas->where('id',329);
            
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
            <div class="row checkbox-ramo">
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
    <section id="ramo-tela-2" style="display:hidden;">
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
                    echo 'foi';
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

            <div class="row checkbox-ramo">
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


    <!-- TELA 3 -->
    <section id="ramo-tela-3" style="display:hidden;">
        <?php 
            $pergunta = $perguntas->where('id',302); 

            $resposta=$respostas->where('id',793);
            $resposta=$respostas->where('id',310);
            $resposta=$respostas->where('id',303);
            $resposta=$respostas->where('id',309);
            $resposta=$respostas->where('id',337);
            $resposta=$respostas->where('id',305);
            $resposta=$respostas->where('id',333);
            $resposta=$respostas->where('id',897);
            $resposta=$respostas->where('id',304);
            $resposta=$respostas->where('id',306);
            $resposta=$respostas->where('id',303);
            $resposta=$respostas->where('id',311);

            $listaRespostas3= [$respostas[140]->id,$respostas[25]->id,$respostas[18]->id,$respostas[24]->id,
            $respostas[46]->id,$respostas[20]->id,$respostas[42]->id,$respostas[155]->id,$respostas[19]->id,
            $respostas[21]->id,$respostas[26]->id];
        ?>
        <h4>{{$pergunta[6]->post_title}}</h4>   
        <p>Passo 3 de 4</p>

        <div class="progress" style="height: 4px; overflow:visible;margin-top:40px">
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-1" ></div>
            <div class="progress-bar color-perguntas-verde" role="progressbar" style="width: 64%" aria-valuenow="64" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-2" ></div>
            <div class="num-progresso-3">3</div>
            <div class="num-progresso-4">4</div>
        </div>

            <div class="row checkbox-ramo">
                <div class="col">
                    <div class="check-option"><input name="check-3" class="check-option-" type="checkbox"value="{{$respostas[140]->id}}"><span>{{$respostas[140]->post_title}}</span></div>
                    <div class="check-option"><input name="check-3" class="check-option-" type="checkbox"value="{{$respostas[25]->id}}"><span>{{$respostas[25]->post_title}}</span></div>
                    <div class="check-option"><input name="check-3" class="check-option-" type="checkbox"value="{{$respostas[18]->id}}"><span>{{$respostas[18]->post_title}}</span></div>
                    <div class="check-option"><input name="check-3" class="check-option-" type="checkbox"value="{{$respostas[24]->id}}"><span>{{$respostas[24]->post_title}}</span></div>
                    <div class="check-option"><input name="check-3" class="check-option-" type="checkbox" value="{{$respostas[46]->id}}"><span>{{$respostas[46]->post_title}}</span></div>
                    <div class="check-option"><input name="check-3" class="check-option-" type="checkbox"value="{{$respostas[20]->id}}"><span>{{$respostas[20]->post_title}}</span></div>
                </div>
                <div class="col">
                    <div class="check-option"><input name="check-3" class="check-option-" type="checkbox"value="{{$respostas[42]->id}}"><span>{{$respostas[42]->post_title}}</span></div>
                    <div class="check-option"><input name="check-3" class="check-option-" type="checkbox"value="{{$respostas[155]->id}}"><span>{{$respostas[155]->post_title}}</span></div>
                    <div class="check-option"><input name="check-3" class="check-option-" type="checkbox"value="{{$respostas[19]->id}}"><span>{{$respostas[19]->post_title}}</span></div>
                    <div class="check-option"><input name="check-3" class="check-option-" type="checkbox"value="{{$respostas[21]->id}}"><span>{{$respostas[21]->post_title}}</span></div>
                    <div class="check-option"><input name="check-3" class="check-option-" type="checkbox"value="{{$respostas[26]->id}}"><span>{{$respostas[26]->post_title}}</span></div>
                </div>
            </div>
        <div class="anterior previous-3">Voltar</div><div class="proxima next-3">Próxima</div>
    </section>


    <!-- TELA 4 -->
    <section id="ramo-tela-4" style="display:hidden;">
        <?php 
            $pergunta = $perguntas->where('id',341);

            $resposta=$respostas->where('id',790);
            $resposta=$respostas->where('id',343);
            $resposta=$respostas->where('id',900);
            $resposta=$respostas->where('id',342);
            $resposta=$respostas->where('id',349);
            $resposta=$respostas->where('id',344);
            $resposta=$respostas->where('id',350);
            $resposta=$respostas->where('id',347);
            $resposta=$respostas->where('id',348);
            $resposta=$respostas->where('id',345);
            $resposta=$respostas->where('id',346);
            $resposta=$respostas->where('id',899);
            $resposta=$respostas->where('id',351);

            $listaRespostas4 = [$respostas[137]->id,$respostas[51]->id,$respostas[157]->id,$respostas[50]->id,
            $respostas[57]->id,$respostas[52]->id,$respostas[58]->id,$respostas[55]->id,$respostas[56]->id,
            $respostas[53]->id,$respostas[54]->id,$respostas[156]->id,$respostas[59]->id];
        ?>
        <h4>{{$pergunta[9]->post_title}}</h4>   
        <p>Passo 4 de 4</p>

        <div class="progress" style="height: 4px; overflow:visible;margin-top:40px">
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-1" ></div>
            <div class="progress-bar color-perguntas-verde" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-2" ></div>
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-3" ></div>
            <div class="num-progresso-4">4</div>
        </div>

        <form action="{{route('indexPost')}}">
            <div class="row checkbox-ramo">
                <div class="col">
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[137]->id}}"><span>{{$respostas[137]->post_title}}</span></div>
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[51]->id}}"><span>{{$respostas[51]->post_title}}</span></div>
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[157]->id}}"><span>{{$respostas[157]->post_title}}</span></div>
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[50]->id}}"><span>{{$respostas[50]->post_title}}</span></div>
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox" value="{{$respostas[57]->id}}"><span>{{$respostas[57]->post_title}}</span></div>
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[52]->id}}"><span>{{$respostas[52]->post_title}}</span></div>
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[58]->id}}"><span>{{$respostas[58]->post_title}}</span></div>
                </div>
                <div class="col">
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[55]->id}}"><span>{{$respostas[55]->post_title}}</span></div>
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[56]->id}}"><span>{{$respostas[56]->post_title}}</span></div>
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[53]->id}}"><span>{{$respostas[53]->post_title}}</span></div>
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[54]->id}}"><span>{{$respostas[54]->post_title}}</span></div>
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[156]->id}}"><span>{{$respostas[156]->post_title}}</span></div>
                    <div class="check-option"><input name="check-4" class="check-option-" type="checkbox"value="{{$respostas[59]->id}}"><span>{{$respostas[59]->post_title}}</span></div>
                </div>
            </div>
            <div class="anterior previous-4" style="margin-top:11px !important">Voltar</div>
            <input class="proxima-submit next-4" value="Próxima">
        </form>
   
    </section>
   

    <!-- TELA Final -->
    <section id="ramo-tela-final" style="display:hidden;">
        <div class="topo-ramo-final">
            <img src="{{asset('images/icon-Info-Cadastradas.svg')}}">
            <h3>Informações cadastradas</h3>
            <p>Sobre Ramo de atuação</p>
        </div>
        <div class="row ramo-final">
            <div class="col">
                <?php $pergunta = $perguntas->where('id',329)?>
                <div class="ramo-final-resposta">
                    <p>{{$pergunta[8]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach

                    <img src="{{asset('images/icon-Editar.svg')}}" class="ramo-final-img">
                </div> 

                <?php $pergunta = $perguntas->where('id',313) ?>
                <div class="ramo-final-resposta">
                    <p>{{$pergunta[7]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="ramo-final-img">
                </div> 
            </div>
            <div class="col">
                <?php $pergunta = $perguntas->where('id',302) ?>
                <div class="ramo-final-resposta">
                    <p>{{$pergunta[6]->post_title}}</p>   
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas3))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="ramo-final-img">
                </div>
                <?php $pergunta = $perguntas->where('id',341) ?>
                <div class="ramo-final-resposta"> 
                    <p>{{$pergunta[9]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas4))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="ramo-final-img">
                </div> 
            </div>
        </div>   

        <div class="anterior previous-final">Voltar</div><div class="proxima next-final">Próxima</div>
    </section>
@endsection