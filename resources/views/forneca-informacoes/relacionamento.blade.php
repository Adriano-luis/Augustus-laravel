@extends('forneca-informacoes')

@section('relacionamento')
    <!-- TELA 1 -->
    <input type="hidden" name="aba-nome" value="relacionamento">
    <input type="hidden" name="idEmpresa" value="{{$_SESSION['idEmpresa']}}">
    <input type="hidden" name="cont" value="{{$_SESSION['cont']}}">
    <section id="relacionamento-tela-1">
        <?php 
            $pergunta1 = $perguntas->where('id',246);
            $pergunta2 = $perguntas->where('id',404);
            $pergunta3 = $perguntas->where('id',401);
            $pergunta4 = $perguntas->where('id',398);

            $resposta1 = $respostas->where('id',1246);
            $resposta2 = $respostas->where('id',1247);

            $resposta3=$respostas->where('id',405);
            $resposta4=$respostas->where('id',406);

            $resposta5=$respostas->where('id',402);
            $resposta6=$respostas->where('id',403);

            $resposta7=$respostas->where('id',399);
            $resposta8=$respostas->where('id',400);



            $lista1Respostas1 = [$resposta1[160]->id,$resposta2[161]->id];
            $lista2Respostas1 = [$resposta3[97]->id,$resposta4[98]->id];
            $lista3Respostas1 = [$resposta5[95]->id,$resposta6[96]->id];
            $lista4Respostas1 = [$resposta7[93]->id,$resposta8[94]->id];
           
            
        ?>
        <p class="passos">Passo 1 de 2</p>

        <div class="progress" style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
            <div class="num-progresso-1">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 6.33%" aria-valuenow="4.33" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
        </div>

        <div class="col checkbox-relacionamento">
            <div class="row radio-relacionamento">
                <div class="col">
                    <h6>{{$pergunta1[1]->post_title}}</h6>
                    <div id="radio1-tela1" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta1[160]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta1[160]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta1[160]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta2[161]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta2[161]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta2[161]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-relacionamento">
                <div class="col">
                    <h6>{{$pergunta2[20]->post_title}}</h6>
                    <div id="radio2-tela1" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta3[97]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[97]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta3[97]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta4[98]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[98]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta4[98]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-relacionamento">
                <div class="col">
                    <h6>{{$pergunta3[19]->post_title}}</h6>
                    <div id="radio3-tela1" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta5[95]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[95]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta5[95]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta6[96]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[96]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta6[96]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-relacionamento">
                <div class="col">
                    <h6>{{$pergunta4[18]->post_title}}</h6>
                    <div id="radio4-tela1" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta7[93]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta7[93]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta7[93]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta8[94]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta8[94]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta8[94]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="proxima next-relacionamento-1">Próxima</div>
    </section>


    <!-- TELA 2 -->
    <section id="relacionamento-tela-2">
        <?php 
            $pergunta1 = $perguntas->where('id',407); 
            $pergunta2 = $perguntas->where('id',393); 
            
            $resposta1=$respostas->where('id',408);
            $resposta2=$respostas->where('id',409);

            $resposta3=$respostas->where('id',394);
            $resposta4=$respostas->where('id',395);
            $resposta5=$respostas->where('id',396);
            $resposta6=$respostas->where('id',397);


            $lista1Respostas2 = [$resposta1[99]->id,$resposta2[100]->id];
            $lista2Respostas2 = [$resposta3[89]->id,$resposta4[90]->id,$resposta5[91]->id,$resposta6[92]->id];

        ?>
        <p class="passos">Passo 2 de 2</p>

        <div class="progress"style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-1" ></div>
            <div class="progress-bar color-perguntas-verde" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
        </div>

        <div class="col checkbox-relacionamento">
            <div class="row radio-relacionamento">
                <div class="col">
                    <h6>{{$pergunta1[21]->post_title}}</h6>
                    <div id="radio1-tela2" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta1[99]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta1[99]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta1[99]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta2[100]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta2[100]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta2[100]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-relacionamento">
                <div class="col">
                    <h6>{{$pergunta2[17]->post_title}}</h6>
                    <select id="terrestres" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="{{$resposta3[89]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[89]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta3[89]->post_title}}
                        </option>

                        <option value="{{$resposta4[90]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[90]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta4[90]->post_title}}
                        </option>

                        <option value="{{$resposta5[91]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[91]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta5[91]->post_title}}
                        </option>

                        <option value="{{$resposta6[92]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[92]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta6[92]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
        </div>
    
        
        <div class="anterior previous-relacionamento-2">Voltar</div><div class="proxima next-relacionamento-2">Próxima</div>
    </section>

     <!-- TELA Final -->
    <section id="relacionamento-tela-final">
        <div class="topo-relacionamento-final">
            <img src="{{asset('images/icon-Info-Cadastradas.svg')}}">
            <h3>Informações cadastradas</h3>
            <p>Sobre relacionamento</p>
        </div>
        <div class="row relacionamento-final">
            <div class="col">
                <?php $pergunta1 = $perguntas->where('id',246)?>
                <div class="relacionamento-final-resposta">
                    <p>{{$pergunta1[1]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista1Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="relacionamento-final-img">
                    </div>
                </div> 
                <?php $pergunta2 = $perguntas->where('id',404) ?>
                <div class="relacionamento-final-resposta">
                    <p>{{$pergunta2[20]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="relacionamento-final-img">
                    </div>
                </div> 
                <?php $pergunta3 = $perguntas->where('id',401) ?>
                <div class="relacionamento-final-resposta">
                    <p>{{$pergunta3[19]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista3Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="relacionamento-final-img">
                    </div>
                </div> 
            </div>
            <div class="col">
                <?php $pergunta4 = $perguntas->where('id',398) ?>
                <div class="relacionamento-final-resposta">
                    <p>{{$pergunta4[18]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista4Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="relacionamento-final-img">
                    </div>
                </div>
                <?php $pergunta5 = $perguntas->where('id',407) ?>
                <div class="relacionamento-final-resposta"> 
                    <p>{{$pergunta5[21]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista1Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-relacionamento-final
                    ">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="relacionamento-final-img">
                    </div>
                </div> 
                <?php $pergunta6 = $perguntas->where('id',393) ?>
                <div class="relacionamento-final-resposta"> 
                    <p>{{$pergunta6[17]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-relacionamento-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="relacionamento-final-img">
                    </div>
                </div> 
            </div>
        </div>   

        <div class="anterior previous-relacionamento-final">Voltar</div><div class="proxima next-relacionamento-final">Próxima</div>
    </section>
@endsection