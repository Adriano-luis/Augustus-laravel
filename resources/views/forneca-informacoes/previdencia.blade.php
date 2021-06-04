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

            
            $resposta1=$respostas->where('id',375);
            $resposta2=$respostas->where('id',376);
            $resposta3=$respostas->where('id',377);
            $resposta4=$respostas->where('id',378);
            $resposta5=$respostas->where('id',379);
            $resposta6=$respostas->where('id',380);
            $resposta7=$respostas->where('id',381);

            $resposta8=$respostas->where('id',269);
            $resposta9=$respostas->where('id',270);
            $resposta10=$respostas->where('id',271);
            $resposta11=$respostas->where('id',272);

            $resposta12=$respostas->where('id',837);
            $resposta13=$respostas->where('id',838);

            $resposta14=$respostas->where('id',795);
            $resposta15=$respostas->where('id',796);
            $resposta16=$respostas->where('id',797);
            $resposta17=$respostas->where('id',798);
            $resposta18=$respostas->where('id',799);
            $resposta19=$respostas->where('id',801);

            $lista1Respostas1 = [$resposta1[76]->id,$resposta2[77]->id,$resposta3[78]->id,$resposta4[79]->id,
                                $resposta5[80]->id,$resposta6[81]->id,$resposta7[82]->id];
            $lista2Respostas1 = [$resposta8[6]->id,$resposta9[7]->id,$resposta10[8]->id,$resposta11[9]->id];
            $lista3Respostas1 = [$resposta12[153]->id,$resposta13[154]->id];
            $lista4Respostas1 = [$resposta14[141]->id,$resposta15[142]->id,$resposta16[143]->id,
                                $resposta17[144]->id,$resposta18[145]->id,$resposta19[146]->id];
           
            
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
                        <option value="{{$resposta1[76]->id}}">{{$resposta1[76]->post_title}}</option>
                        <option value="{{$resposta2[77]->id}}">{{$resposta2[77]->post_title}}</option>
                        <option value="{{$resposta3[78]->id}}">{{$resposta3[78]->post_title}}</option>
                        <option value="{{$resposta4[79]->id}}">{{$resposta4[79]->post_title}}</option>
                        <option value="{{$resposta5[80]->id}}">{{$resposta5[80]->post_title}}</option>
                        <option value="{{$resposta6[81]->id}}">{{$resposta6[81]->post_title}}</option>
                        <option value="{{$resposta7[82]->id}}">{{$resposta7[82]->post_title}}</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta2[3]->post_title}}</h6>
                    <select id="inss" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="{{$resposta8[6]->id}}">{{$resposta8[6]->post_title}}</option>
                        <option value="{{$resposta9[7]->id}}">{{$resposta9[7]->post_title}}</option>
                        <option value="{{$resposta10[8]->id}}">{{$resposta10[8]->post_title}}</option>
                        <option value="{{$resposta11[9]->id}}">{{$resposta11[9]->post_title}}</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta3[38]->post_title}}</h6>
                    <div class="row radio radio1-tela1">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta12[153]->id}}">{{$resposta12[153]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta13[154]->id}}">{{$resposta13[154]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta4[34]->post_title}}</h6>
                    <select id="fap" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="{{$resposta14[141]->id}}">{{$resposta14[141]->post_title}}</option>
                        <option value="{{$resposta15[142]->id}}">{{$resposta15[142]->post_title}}</option>
                        <option value="{{$resposta16[143]->id}}">{{$resposta16[143]->post_title}}</option>
                        <option value="{{$resposta17[144]->id}}">{{$resposta17[144]->post_title}}</option>
                        <option value="{{$resposta18[145]->id}}">{{$resposta18[145]->post_title}}</option>
                        <option value="{{$resposta19[146]->id}}">{{$resposta19[146]->post_title}}</option>
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
            
            $resposta1=$respostas->where('id',252);
            $resposta2=$respostas->where('id',253);
            $resposta3=$respostas->where('id',254);

            $resposta4=$respostas->where('id',372);
            $resposta5=$respostas->where('id',373);

            $resposta6=$respostas->where('id',366);
            $resposta7=$respostas->where('id',367);
            $resposta8=$respostas->where('id',368);
            $resposta9=$respostas->where('id',369);

            $resposta10=$respostas->where('id',298);
            $resposta11=$respostas->where('id',299);


            $lista1Respostas2 = [$resposta1[3]->id,$resposta2[4]->id,$resposta3[5]->id];
            $lista2Respostas2 = [$resposta4[74]->id,$resposta5[75]->id];
            $lista3Respostas2 = [$resposta6[70]->id,$resposta7[71]->id,
                                $resposta8[72]->id,$resposta9[73]->id];
            $lista4Respostas2 = [$resposta10[16]->id,$resposta11[17]->id];

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
                        <option value="{{$resposta1[3]->id}}">{{$resposta1[3]->post_title}}</option>
                        <option value="{{$resposta2[4]->id}}">{{$resposta2[4]->post_title}}</option>
                        <option value="{{$resposta3[5]->id}}">{{$resposta3[5]->post_title}}</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta2[13]->post_title}}</h6>
                    <div class="row radio radio1-tela2">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta4[74]->id}}">{{$resposta4[74]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta5[75]->id}}">{{$resposta5[75]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta3[12]->post_title}}</h6>
                    <select id="cooperativas" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="{{$resposta6[70]->id}}">{{$resposta6[70]->post_title}}</option>
                        <option value="{{$resposta7[71]->id}}">{{$resposta7[71]->post_title}}</option>
                        <option value="{{$resposta8[72]->id}}">{{$resposta8[72]->post_title}}</option>
                        <option value="{{$resposta9[73]->id}}">{{$resposta9[73]->post_title}}</option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta4[5]->post_title}}</h6>
                    <div class="row radio radio2-tela2">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta10[16]->id}}">{{$resposta10[16]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta11[17]->id}}">{{$resposta11[17]->post_title}}
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
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista1Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 

                <?php $pergunta2 = $perguntas->where('id',268) ?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta2[3]->post_title}}</p>  
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 

                <?php $pergunta3 = $perguntas->where('id',836) ?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta3[38]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista3Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 

                <?php $pergunta4 = $perguntas->where('id',794) ?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta4[34]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista4Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 
            </div>
            <div class="col">
                <?php $pergunta5 = $perguntas->where('id',251) ?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta5[2]->post_title}}</p>   
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista1Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div>

                <?php $pergunta6 = $perguntas->where('id',370) ?>
                <div class="previdencia-final-resposta"> 
                    <p>{{$pergunta6[13]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 

                <?php $pergunta7 = $perguntas->where('id',365) ?>
                <div class="previdencia-final-resposta"> 
                    <p>{{$pergunta7[12]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista3Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 

                <?php $pergunta8 = $perguntas->where('id',297) ?>
                <div class="previdencia-final-resposta"> 
                    <p>{{$pergunta8[5]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista4Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                </div> 
            </div>
        </div>   

        <div class="anterior previous-previdencia-final">Voltar</div><div class="proxima next-previdencia-final">Próxima</div>
    </section>
@endsection