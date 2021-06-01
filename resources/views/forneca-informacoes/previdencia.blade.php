@extends('forneca-informacoes')

@section('previdencia')
    <!-- TELA 1 -->
    <input type="hidden" name="aba-nome" value="previdencia">
    <input type="hidden" name="idEmpresa" value="{{$_SESSION['idEmpresa']}}">
    <input type="hidden" name="cont" value="{{$_SESSION['cont']}}">
    <section id="previdencia-tela-1">
        <?php 
            $pergunta = $perguntas->where('id',374);
            $pergunta = $perguntas->where('id',268);
            $pergunta = $perguntas->where('id',836);
            $pergunta = $perguntas->where('id',794);

            
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
        <p>Passo 1 de 2</p>

        <div class="progress" style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
            <div class="num-progresso-1">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 6.33%" aria-valuenow="4.33" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
        </div>

        <div class="col checkbox-previdencia">
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta[14]->post_title}}</h6>
                    <select name="regime" class="select">
                        <option value="{{$resposta[]->id}}">Escolha uma opção</option>
                        <option value="{{$resposta[]->id}}">Lucro Real</option>
                        <option value="{{$resposta[]->id}}">Lucro Presumido</option>
                        <option value="{{$resposta[]->id}}">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta[3]->post_title}}</h6>
                    <select name="5anos" class="select">
                        <option value="{{$resposta[]->id}}">Escolha uma opção</option>
                        <option value="{{$resposta[]->id}}">Lucro Real</option>
                        <option value="{{$resposta[]->id}}">Lucro Presumido</option>
                        <option value="{{$resposta[]->id}}">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta[38]->post_title}}</h6>
                    <div class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[]->id}}">Sim
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[]->id}}">Não
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta[34]->post_title}}</h6>
                    <select name="5anos" class="select">
                        <option value="{{$resposta[]->id}}">Escolha uma opção</option>
                        <option value="{{$resposta[]->id}}">Lucro Real</option>
                        <option value="{{$resposta[]->id}}">Lucro Presumido</option>
                        <option value="{{$resposta[]->id}}">Simples Nacional</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="proxima next-previdencia-1">Próxima</div>
    </section>


    <!-- TELA 2 -->
    <section id="previdencia-tela-2">
        <?php 
            $pergunta = $perguntas->where('id',251);
            $pergunta = $perguntas->where('id',370);  
            $pergunta = $perguntas->where('id',365); 
            $pergunta = $perguntas->where('id',297); 
            
            /*$resposta=$respostas->where('id',372);
            $resposta=$respostas->where('id',389);

            $resposta=$respostas->where('id',388);
            $resposta=$respostas->where('id',400);

            $resposta=$respostas->where('id',399);
            $resposta=$respostas->where('id',403);


            $listaRespostas2 = [$respostas[159]->id,$respostas[48]->id,$respostas[39]->id,$respostas[41]->id,
            $respostas[34]->id,$respostas[45]->id,$respostas[47]->id,$respostas[44]->id,$respostas[30]->id,
            $respostas[43]->id,$respostas[40]->id,$respostas[49]->id];*/

        ?> 
        <p>Passo 2 de 2</p>

        <div class="progress" style="height: 4px; overflow:visible;margin-top:40px">
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-1" ></div>
            <div class="progress-bar color-perguntas-verde" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso-2">2</div>
            <div class="num-progresso-3">3</div>
            <div class="num-progresso-4">4</div>
        </div>

        <div class="col checkbox-previdencia">
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta[2]->post_title}}</h6>
                    <select name="5anos" class="select">
                        <option value="{{$resposta[]->id}}">Escolha uma opção</option>
                        <option value="{{$resposta[]->id}}">Lucro Real</option>
                        <option value="{{$resposta[]->id}}">Lucro Presumido</option>
                        <option value="{{$resposta[]->id}}">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta[13]->post_title}}</h6>
                    <div class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[]->id}}">Sim
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[]->id}}">Não
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta[12]->post_title}}</h6>
                    <select name="5anos" class="select">
                        <option value="{{$resposta[]->id}}">Escolha uma opção</option>
                        <option value="{{$resposta[]->id}}">Lucro Real</option>
                        <option value="{{$resposta[]->id}}">Lucro Presumido</option>
                        <option value="{{$resposta[]->id}}">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta[5]->post_title}}</h6>
                    <div class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[]->id}}">Sim
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta[]->id}}">Não
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="anterior previous-previdencia-2">Voltar</div><div class="proxima next-previdencia-2">Próxima</div>
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
                <?php $pergunta = $perguntas->where('id',374)?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta[14]->post_title}}</p>
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div> 

                <?php $pergunta = $perguntas->where('id',268) ?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta[3]->post_title}}</p> 
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div> 

                <?php $pergunta = $perguntas->where('id',836) ?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta[38]->post_title}}</p> 
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div> 

                <?php $pergunta = $perguntas->where('id',794) ?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta[34]->post_title}}</p> 
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div> 
            </div>
            <div class="col">
                <?php $pergunta = $perguntas->where('id',251) ?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta[2]->post_title}}</p>   
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas3))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div>

                <?php $pergunta = $perguntas->where('id',370) ?>
                <div class="tributacao-final-resposta"> 
                    <p>{{$pergunta[13]->post_title}}</p>
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas4))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div> 

                <?php $pergunta = $perguntas->where('id',365) ?>
                <div class="tributacao-final-resposta"> 
                    <p>{{$pergunta[12]->post_title}}</p>
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas4))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                </div> 

                <?php $pergunta = $perguntas->where('id',297) ?>
                <div class="tributacao-final-resposta"> 
                    <p>{{$pergunta[5]->post_title}}</p>
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas4))
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