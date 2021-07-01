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

            $resposta4=$respostas->where('id',272);
            $resposta5=$respostas->where('id',355);
            $resposta6=$respostas->where('id',354);
            $resposta7=$respostas->where('id',353);

            $resposta8=$respostas->where('id',298);
            $resposta9=$respostas->where('id',299);

            $resposta10=$respostas->where('id',364);
            $resposta11=$respostas->where('id',373);

            
            $lista1Respostas1 = [$resposta1[1]->id,$resposta2[2]->id,$resposta3[0]->id];
            $lista2Respostas1 = [$resposta4[9]->id,$resposta5[62]->id,$resposta6[61]->id,$resposta7[60]->id];
            $lista3Respostas1 = [$resposta8[16]->id,$resposta9[17]->id];
            $lista4Respostas1 = [$resposta10[69]->id,$resposta11[75]->id];
           
            
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

                        <option value="{{$resposta4[9]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[9]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta4[9]->post_title}}
                        </option>

                        <option value="{{$resposta5[62]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[62]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta5[62]->post_title}}
                        </option>

                        <option value="{{$resposta6[61]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[61]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta6[61]->post_title}}
                        </option>

                        <option value="{{$resposta7[60]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta7[60]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta7[60]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row radio-tributacao">
                <div class="col">
                    <h6>{{$pergunta3[32]->post_title}}</h6>
                    <div id="radio1-tela1" class="row radio">
                        <div class=" col radio">
                            <input type="radio" class="recuperacao" value="{{$resposta8[16]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta8[16]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta8[16]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" class="recuperacao" value="{{$resposta9[17]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta9[17]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta9[17]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-tributacao">
                <div class="col">
                    <h6>{{$pergunta4[33]->post_title}}</h6>
                    <div id="radio2-tela1" class="row radio ">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta10[69]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta10[69]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta10[69]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta11[75]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta11[75]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta11[75]->post_title}}
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
            
            $resposta1=$respostas->where('id',372);
            $resposta2=$respostas->where('id',389);

            $resposta3=$respostas->where('id',388);
            $resposta4=$respostas->where('id',400);

            $resposta5=$respostas->where('id',399);
            $resposta6=$respostas->where('id',403);

            
            $lista1Respostas2 = [$resposta1[74]->id,$resposta2[88]->id];
            $lista2Respostas2 = [$resposta3[87]->id,$resposta4[94]->id];
            $lista3Respostas2 = [$resposta5[93]->id,$resposta6[96]->id];
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
                        <input type="radio" value="{{$resposta1[74]->id}}"<?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta1[74]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta1[74]->post_title}}
                    </div>
                    <div class=" col radio">
                        <input type="radio" value="{{$resposta2[88]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta2[88]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta2[88]->post_title}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row radio-tributacao">
            <div class="col">
                <h6>{{$pergunta2[35]->post_title}}</h6>
                <div id="radio2-tela2" class="row radio">
                    <div class=" col radio">
                        <input type="radio" value="{{$resposta3[87]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[87]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta3[87]->post_title}}
                    </div>
                    <div class=" col radio">
                        <input type="radio" value="{{$resposta4[94]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[94]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta4[94]->post_title}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row radio-tributacao">
            <div class="col">
                <h6>{{$pergunta3[22]->post_title}}</h6>
                <div id="radio3-tela2" class="row radio">
                    <div class=" col radio">
                        <input type="radio" value="{{$resposta5[93]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[93]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta5[93]->post_title}}
                    </div>
                    <div class=" col radio">
                        <input type="radio" value="{{$resposta6[96]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[96]->id){ echo 'checked="checked"';}} ?>>
                        {{$resposta6[96]->post_title}}
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
            <p>Sobre tributacao</p>
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