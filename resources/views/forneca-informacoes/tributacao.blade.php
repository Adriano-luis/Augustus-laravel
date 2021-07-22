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

            
            $resposta1=$respostas->where('id',243);
            $resposta2=$respostas->where('id',244);
            $resposta3=$respostas->where('id',0);

            $resposta4=$respostas->where('id',353);
            $resposta5=$respostas->where('id',354);
            $resposta6=$respostas->where('id',355);
            $resposta7=$respostas->where('id',356);

            $resposta8=$respostas->where('id',456);
            $resposta9=$respostas->where('id',457);

            $resposta10=$respostas->where('id',786);
            $resposta11=$respostas->where('id',787);

            
            $lista1Respostas1 = [$resposta1[1]->id,$resposta2[2]->id,$resposta3[0]->id];
            $lista2Respostas1 = [$resposta4[60]->id,$resposta5[61]->id,$resposta6[62]->id,$resposta7[63]->id];
            $lista3Respostas1 = [$resposta8[127]->id,$resposta9[128]->id];
            $lista4Respostas1 = [$resposta10[133]->id,$resposta11[134]->id];
           
            
        ?>
        <p class="passos">Passo 1 de 2</p>

        <div class="progress" style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
            <div class="num-progresso-1">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 6.33%" aria-valuenow="4.33" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
        </div>

        <div class="col checkbox-tributacao">
            <div class="row radio-tributacao">
                <div class="col">
                    <h6>{{$pergunta1[0]->post_title}}</h6>
                    <select class="select" id="regime">
                        <option value="">
                            Escolha uma opção
                        </option>

                        <option value="{{$resposta1[1]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta1[1]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta1[1]->post_title}}
                        </option>

                        <option value="{{$resposta2[2]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta2[2]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta2[2]->post_title}}
                        </option>

                        <option value="{{$resposta3[0]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[0]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta3[0]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row radio-tributacao">
                <div class="col">
                    <h6>{{$pergunta2[10]->post_title}}</h6>
                    <select id="5anos" class="select">
                        <option value="">Escolha uma opção</option>

                        <option value="{{$resposta4[60]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[60]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta4[60]->post_title}}
                        </option>

                        <option value="{{$resposta5[61]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[61]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta5[61]->post_title}}
                        </option>

                        <option value="{{$resposta6[62]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[62]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta6[62]->post_title}}
                        </option>

                        <option value="{{$resposta7[63]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta7[63]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta7[63]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row radio-tributacao">
                <div class="col">
                    <h6>{{$pergunta3[32]->post_title}}</h6>
                    <div id="radio1-tela1" class="row radio">
                        <div class=" col radio">
                            <input type="radio" class="recuperacao" value="{{$resposta8[127]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta8[127]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta8[127]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" class="recuperacao" value="{{$resposta9[128]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta9[128]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta9[128]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-tributacao">
                <div class="col">
                    <h6>{{$pergunta4[33]->post_title}}</h6>
                    <div id="radio2-tela1" class="row radio ">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta10[133]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta10[133]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta10[133]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta11[134]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta11[134]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta11[134]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="proxima next-tributacao-1">Próxima</div>
    </section>


    <!-- TELA 2 -->
    <section id="tributacao-tela-2">
        <?php 
            $pergunta1 = $perguntas->where('id',830); 
            $pergunta2 = $perguntas->where('id',821); 
            $pergunta3 = $perguntas->where('id',416); 
            
            $resposta1=$respostas->where('id',831);
            $resposta2=$respostas->where('id',832);

            $resposta3=$respostas->where('id',822);
            $resposta4=$respostas->where('id',823);

            $resposta5=$respostas->where('id',1248);
            $resposta6=$respostas->where('id',1249);

            
            $lista1Respostas2 = [$resposta1[151]->id,$resposta2[152]->id];
            $lista2Respostas2 = [$resposta3[147]->id,$resposta4[148]->id];
            $lista3Respostas2 = [$resposta5[162]->id,$resposta6[163]->id];
        ?> 
        <p class="passos">Passo 2 de 2</p>

        <div class="progress"style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-1" ></div>
            <div class="progress-bar color-perguntas-verde" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
        </div>

        <div class="row radio-tributacao ">
            <div class="col">
                <h6>{{$pergunta1[37]->post_title}}</h6>
                <div id="radio1-tela2" class="row radio ">
                    <div class=" col radio">
                        <input type="radio" value="{{$resposta1[151]->id}}"<?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta1[151]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta1[151]->post_title}}
                    </div>
                    <div class=" col radio">
                        <input type="radio" value="{{$resposta2[152]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta2[152]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta2[152]->post_title}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row radio-tributacao">
            <div class="col">
                <h6>{{$pergunta2[35]->post_title}}</h6>
                <div id="radio2-tela2" class="row radio">
                    <div class=" col radio">
                        <input type="radio" value="{{$resposta3[147]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[147]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta3[147]->post_title}}
                    </div>
                    <div class=" col radio">
                        <input type="radio" value="{{$resposta4[148]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[148]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta4[148]->post_title}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row radio-tributacao">
            <div class="col">
                <h6>{{$pergunta3[22]->post_title}}</h6>
                <div id="radio3-tela2" class="row radio">
                    <div class=" col radio">
                        <input type="radio" value="{{$resposta5[162]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[162]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta5[162]->post_title}}
                    </div>
                    <div class=" col radio">
                        <input type="radio" value="{{$resposta6[163]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[163]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta6[163]->post_title}}
                    </div>
                </div>
            </div>
        </div>
        
        <div class="anterior previous-tributacao-2">Voltar</div><div class="proxima next-tributacao-2">Próxima</div>
    </section>

    <!-- TELA Final -->
    <section id="tributacao-tela-final">
        <div class="topo-tributacao-final">
            <img src="{{asset('images/icon-Info-Cadastradas.svg')}}">
            <h3>Informações cadastradas</h3>
            <p>Tributacao</p>
        </div>
        <div class="row tributacao-final">
            <div class="col">
                <?php $pergunta1 = $perguntas->where('id',242)?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta1[0]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista1Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach

                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                    </div>
                </div> 

                <?php $pergunta2 = $perguntas->where('id',352) ?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta2[10]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                    </div>
                </div> 

                <?php $pergunta3 = $perguntas->where('id',455)?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta3[32]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista3Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach

                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                    </div>
                </div> 

                <?php $pergunta4 = $perguntas->where('id',785)?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta4[33]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista4Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach

                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                    </div>
                </div> 
            </div>
            <div class="col">
                <?php $pergunta5 = $perguntas->where('id',830) ?>
                <div class="tributacao-final-resposta">
                    <p>{{$pergunta5[37]->post_title}}</p>   
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista1Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-tributacao-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                    </div>
                </div>

                <?php $pergunta6 = $perguntas->where('id',821) ?>
                <div class="tributacao-final-resposta"> 
                    <p>{{$pergunta6[35]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-tributacao-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                    </div>
                </div> 

                <?php $pergunta7 = $perguntas->where('id',416) ?>
                <div class="tributacao-final-resposta"> 
                    <p>{{$pergunta7[22]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista3Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-tributacao-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="tributacao-final-img">
                    </div>
                </div> 
            </div>
        </div>   

        <div class="anterior previous-tributacao-final">Voltar</div><div class="proxima next-tributacao-final">Próxima</div>
    </section>
@endsection