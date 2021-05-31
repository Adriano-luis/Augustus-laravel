@extends('forneca-informacoes')

@section('tributacao')
    <!-- TELA 1 -->
    <input type="hidden" name="aba-nome" value="tributacao">
    <input type="hidden" name="idEmpresa" value="{{$_SESSION['idEmpresa']}}">
    <input type="hidden" name="cont" value="{{$_SESSION['cont']}}">
    <section id="tributacao-tela-1">
        <?php 
            $pergunta1 = $perguntas->where('id',242);
            $pergunta2 = $perguntas->where('id',352);
            $pergunta3 = $perguntas->where('id',455);
            $pergunta4 = $perguntas->where('id',785);

            
            /*$resposta=$respostas->where('id',791);
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
            $respostas[31]->id,$respostas[28]->id,$respostas[38]->id];*/
           
            
        ?>
        <p>Passo 1 de 2</p>

        <div class="progress" style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
            <div class="num-progresso-1">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 6.33%" aria-valuenow="4.33" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
        </div>

        <div class="col checkbox-tributacao">
            <div class="row radio-tributacao">
                <div class="col">
                    <h6>{{$pergunta1[0]->post_title}}</h6>
                    <select name="regime" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="">Lucro Real</option>
                        <option value="">Lucro Presumido</option>
                        <option value="">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-tributacao">
                <div class="col">
                    <h6>{{$pergunta2[10]->post_title}}</h6>
                    <select name="5anos" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="">Lucro Real</option>
                        <option value="">Lucro Presumido</option>
                        <option value="">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-tributacao">
                <div class="col">
                    <h6>{{$pergunta3[32]->post_title}}</h6>
                    <div class="row radio">
                        <div class=" col radio">
                            <input type="radio">Sim
                        </div>
                        <div class=" col radio">
                            <input type="radio">Não
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <div class="row radio-tributacao">
                <div class="col">
                    <h6>{{$pergunta4[33]->post_title}}</h6>
                    <div class="row radio">
                        <div class=" col radio">
                            <input type="radio">Sim
                        </div>
                        <div class=" col radio">
                            <input type="radio">Não
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="proxima next-1">Próxima</div>
    </section>


    <!-- TELA 2 -->
    <section id="tributacao-tela-2">
        <?php 
            $pergunta = $perguntas->where('id',313); 
            
            /*$resposta=$respostas->where('id',1245);
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
            $respostas[43]->id,$respostas[40]->id,$respostas[49]->id];*/

        ?>
        <h6>{{$pergunta[7]->post_title}}</h6>   
        <p>Passo 2 de 4</p>

        <div class="progress" style="height: 4px; overflow:visible;margin-top:40px">
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-1" ></div>
            <div class="progress-bar color-perguntas-verde" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso-2">2</div>
            <div class="num-progresso-3">3</div>
            <div class="num-progresso-4">4</div>
        </div>

        <div class="row radio-tributacao">
            <div class="col">
                <h6>{{$pergunta4[33]->post_title}}</h6>
                <div class="row radio">
                    <div class=" col radio">
                        <input type="radio">Sim
                    </div>
                    <div class=" col radio">
                        <input type="radio">Não
                    </div>
                </div>
            </div>
        </div>
        <div class="row radio-tributacao">
            <div class="col">
                <h6>{{$pergunta4[33]->post_title}}</h6>
                <div class="row radio">
                    <div class=" col radio">
                        <input type="radio">Sim
                    </div>
                    <div class=" col radio">
                        <input type="radio">Não
                    </div>
                </div>
            </div>
        </div>
        <div class="row radio-tributacao">
            <div class="col">
                <h6>{{$pergunta4[33]->post_title}}</h6>
                <div class="row radio">
                    <div class=" col radio">
                        <input type="radio">Sim
                    </div>
                    <div class=" col radio">
                        <input type="radio">Não
                    </div>
                </div>
            </div>
        </div>
        
        <div class="anterior previous-2">Voltar</div><div class="proxima next-2">Próxima</div>
    </section>

    <!-- TELA Final 
    <section id="tributacao-tela-final">
        <div class="topo-tributacao-final">
            <img src="{{asset('images/icon-Info-Cadastradas.svg')}}">
            <h3>Informações cadastradas</h3>
            <p>Sobre tributacao</p>
        </div>
        <div class="row tributacao-final">
            <div class="col">
                <?php /*$pergunta = $perguntas->where('id',329)?>
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
    </section>*/?>-->
@endsection