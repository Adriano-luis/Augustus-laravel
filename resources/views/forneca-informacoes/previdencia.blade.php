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
        <p class="passos">Passo 1 de 2</p>

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
                        <option value="">Escolha uma op????o</option>
                        <option value="{{$resposta1[76]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta1[76]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta1[76]->post_title}}
                        </option>

                        <option value="{{$resposta2[77]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta2[77]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta2[77]->post_title}}
                        </option>

                        <option value="{{$resposta3[78]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[78]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta3[78]->post_title}}
                        </option>

                        <option value="{{$resposta4[79]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[79]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta4[79]->post_title}}
                        </option>

                        <option value="{{$resposta5[80]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[80]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta5[80]->post_title}}
                        </option>

                        <option value="{{$resposta6[81]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[81]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta6[81]->post_title}}
                        </option>

                        <option value="{{$resposta7[82]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta7[82]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta7[82]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta2[3]->post_title}}</h6>
                    <select id="inss" class="select">
                        <option value="">Escolha uma op????o</option>
                        <option value="{{$resposta8[6]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta8[6]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta8[6]->post_title}}
                        </option>

                        <option value="{{$resposta9[7]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta9[7]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta9[7]->post_title}}
                        </option>

                        <option value="{{$resposta10[8]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta10[8]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta10[8]->post_title}}
                        </option>

                        <option value="{{$resposta11[9]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta11[9]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta11[9]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta3[38]->post_title}}</h6>
                    <div id="radio1-tela1" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta12[153]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta12[153]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta12[153]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta13[154]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta13[154]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta13[154]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta4[34]->post_title}}</h6>
                    <select id="fap" class="select">
                        <option value="">Escolha uma op????o</option>
                        <option value="{{$resposta14[141]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta14[141]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta14[141]->post_title}}
                        </option>

                        <option value="{{$resposta15[142]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta15[142]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta15[142]->post_title}}
                        </option>

                        <option value="{{$resposta16[143]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta16[143]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta16[143]->post_title}}
                        </option>

                        <option value="{{$resposta17[144]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta17[144]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta17[144]->post_title}}
                        </option>

                        <option value="{{$resposta18[145]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta18[145]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta18[145]->post_title}}
                        </option>

                        <option value="{{$resposta19[146]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta19[146]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta19[146]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="proxima next-previdencia-1">Pr??xima</div>
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
        <p class="passos">Passo 2 de 2</p>

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
                        <option value="">Escolha uma op????o</option>
                        <option value="{{$resposta1[3]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta1[3]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta1[3]->post_title}}
                        </option>

                        <option value="{{$resposta2[4]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta2[4]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta2[4]->post_title}}
                        </option>

                        <option value="{{$resposta3[5]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[5]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta3[5]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta2[13]->post_title}}</h6>
                    <div id="radio1-tela2" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta4[74]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[74]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta4[74]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta5[75]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[75]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta5[75]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta3[12]->post_title}}</h6>
                    <select id="cooperativas" class="select">
                        <option value="">Escolha uma op????o</option>
                        <option value="{{$resposta6[70]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[70]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta6[70]->post_title}}
                        </option>

                        <option value="{{$resposta7[71]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta7[71]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta7[71]->post_title}}
                        </option>

                        <option value="{{$resposta8[72]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta8[72]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta8[72]->post_title}}
                        </option>

                        <option value="{{$resposta9[73]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta9[73]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta9[73]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row radio-previdencia">
                <div class="col">
                    <h6>{{$pergunta4[5]->post_title}}</h6>
                    <div id="radio2-tela2" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta10[16]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta10[16]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta10[16]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta11[17]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta11[17]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta11[17]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="anterior previous-previdencia-2">Voltar</div><div class="proxima next-previdencia-2">Pr??xima</div>
    </section>

      <!-- TELA Final -->
    <section id="previdencia-tela-final">
        <div class="topo-previdencia-final">
            <img src="{{asset('images/icon-Info-Cadastradas.svg')}}">
            <h3>Informa????es cadastradas</h3>
            <p>Previd??ncia</p>
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
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                    </div>
                </div> 

                <?php $pergunta2 = $perguntas->where('id',268) ?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta2[3]->post_title}}</p>  
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                    </div>
                </div> 

                <?php $pergunta3 = $perguntas->where('id',836) ?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta3[38]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista3Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                    </div>
                </div> 

                <?php $pergunta4 = $perguntas->where('id',794) ?>
                <div class="previdencia-final-resposta">
                    <p>{{$pergunta4[34]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista4Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                    </div>
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
                    <div class="previous-previdencia-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                    </div>
                </div>

                <?php $pergunta6 = $perguntas->where('id',370) ?>
                <div class="previdencia-final-resposta"> 
                    <p>{{$pergunta6[13]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-previdencia-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                    </div>
                </div> 

                <?php $pergunta7 = $perguntas->where('id',365) ?>
                <div class="previdencia-final-resposta"> 
                    <p>{{$pergunta7[12]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista3Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-previdencia-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                    </div>
                </div> 

                <?php $pergunta8 = $perguntas->where('id',297) ?>
                <div class="previdencia-final-resposta"> 
                    <p>{{$pergunta8[5]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista4Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-previdencia-final
                    ">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="previdencia-final-img">
                    </div>
                </div> 
            </div>
        </div>   

        <div class="anterior previous-previdencia-final">Voltar</div><div class="proxima next-previdencia-final">Pr??xima</div>
    </section>
@endsection