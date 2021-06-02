@extends('forneca-informacoes')

@section('previdencia')
    <!-- TELA 1 -->
    <input type="hidden" name="aba-nome" value="previdencia">
    <input type="hidden" name="idEmpresa" value="{{$_SESSION['idEmpresa']}}">
    <input type="hidden" name="cont" value="{{$_SESSION['cont']}}">
    <section id="previdencia-tela-1">
        <?php 
            $pergunta1 = $perguntas->where('id',374);
            $pergunta2 = $perguntas->where('id',268);
            $pergunta3 = $perguntas->where('id',836);
            $pergunta4 = $perguntas->where('id',794);

            
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
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 2.33%" aria-valuenow="2.33" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
        </div>

        <div class="col checkbox-previdencia">
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta1[14]->post_title}}</h6>
                    <select id="pat" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="">Lucro Real</option>
                        <option value="">Lucro Presumido</option>
                        <option value="">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta2[3]->post_title}}</h6>
                    <select id="inss" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="">Lucro Real</option>
                        <option value="">Lucro Presumido</option>
                        <option value="">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta3[38]->post_title}}</h6>
                    <div class="row radio radio1-tela1">
                        <div class=" col radio">
                            <input type="radio" value="">Sim
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="">Não
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta4[34]->post_title}}</h6>
                    <select id="fap" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="">Lucro Real</option>
                        <option value="">Lucro Presumido</option>
                        <option value="">Simples Nacional</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="proxima next-previdencia-1">Próxima</div>
    </section>


    <!-- TELA 2 -->
    <section id="previdencia-tela-2">
        <?php 
            $pergunta1 = $perguntas->where('id',251);
            $pergunta2 = $perguntas->where('id',370);  
            $pergunta3 = $perguntas->where('id',365); 
            $pergunta4 = $perguntas->where('id',297); 
            
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

        <div class="progress"style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-1" ></div>
            <div class="progress-bar color-perguntas-verde" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
        </div>

        <div class="col checkbox-previdencia">
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta1[2]->post_title}}</h6>
                    <select id="inssPatronal" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="">Lucro Real</option>
                        <option value="">Lucro Presumido</option>
                        <option value="">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta2[13]->post_title}}</h6>
                    <div class="row radio radio1-tela2">
                        <div class=" col radio">
                            <input type="radio" value="">Sim
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="">Não
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta3[12]->post_title}}</h6>
                    <select id="cooperativas" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="">Lucro Real</option>
                        <option value="">Lucro Presumido</option>
                        <option value="">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta4[5]->post_title}}</h6>
                    <div class="row radio radio2-tela2">
                        <div class=" col radio">
                            <input type="radio" value="">Sim
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="">Não
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="anterior previous-previdencia-2">Voltar</div><div class="proxima next-previdencia-2">Próxima</div>
    </section>

      <!-- TELA Final -->
    <section id="previdencia-tela-final">
        <div class="topo-previdencia-final">
            <img src="{{asset('images/icon-Info-Cadastradas.svg')}}">
            <h3>Informações cadastradas</h3>
            <p>Sobre previdencia</p>
        </div>
        <div class="row previdencia-final">
            <div class="col">
                <?php $pergunta1 = $perguntas->where('id',374)?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta1[14]->post_title}}</p>
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 

                <?php $pergunta2 = $perguntas->where('id',268) ?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta2[3]->post_title}}</p> 
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 

                <?php $pergunta3 = $perguntas->where('id',836) ?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta3[38]->post_title}}</p> 
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 

                <?php $pergunta4 = $perguntas->where('id',794) ?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta4[34]->post_title}}</p> 
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 
            </div>
            <div class="col">
                <?php $pergunta5 = $perguntas->where('id',251) ?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta5[2]->post_title}}</p>   
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas3))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div>

                <?php $pergunta6 = $perguntas->where('id',370) ?>
                <div class="previdencia-final-resposta"> 
                    <p>{{$pergunta6[13]->post_title}}</p>
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas4))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 

                <?php $pergunta7 = $perguntas->where('id',365) ?>
                <div class="previdencia-final-resposta"> 
                    <p>{{$pergunta7[12]->post_title}}</p>
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas4))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 

                <?php $pergunta8 = $perguntas->where('id',297) ?>
                <div class="previdencia-final-resposta"> 
                    <p>{{$pergunta8[5]->post_title}}</p>
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas4))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 
            </div>
        </div>   

        <div class="anterior previous-previdencia-final">Voltar</div><div class="proxima next-previdencia-final">Próxima</div>
    </section>
@endsection