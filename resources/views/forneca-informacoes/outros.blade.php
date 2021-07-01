@extends('forneca-informacoes')

@section('outros')
    <!-- TELA 1 -->
    <input type="hidden" name="aba-nome" value="outros">
    <input type="hidden" name="idEmpresa" value="{{$_SESSION['idEmpresa']}}">
    <input type="hidden" name="cont" value="{{$_SESSION['cont']}}">
    <section id="outros-tela-1">
        <?php 
            $pergunta1 = $perguntas->where('id',825);
            $pergunta2 = $perguntas->where('id',452);
            $pergunta3 = $perguntas->where('id',446);
            $pergunta4 = $perguntas->where('id',440);

            
            $resposta1=$respostas->where('id',826);
            $resposta2=$respostas->where('id',827);

            $resposta3=$respostas->where('id',453);
            $resposta4=$respostas->where('id',454);

            $resposta5=$respostas->where('id',447);
            $resposta6=$respostas->where('id',448);
            $resposta7=$respostas->where('id',449);
            $resposta8=$respostas->where('id',450);
            $resposta9=$respostas->where('id',451);

            $resposta10=$respostas->where('id',441);
            $resposta11=$respostas->where('id',443);
            $resposta12=$respostas->where('id',444);
            $resposta13=$respostas->where('id',445);


            $lista1Respostas1 = [$resposta1[149]->id,$resposta2[150]->id];
            $lista2Respostas1 = [$resposta3[125]->id,$resposta4[126]->id];
            $lista3Respostas1 = [$resposta5[120]->id,$resposta6[121]->id,$resposta7[122]->id,$resposta8[123]->id,
                                $resposta9[124]->id];
            $lista4Respostas1 = [$resposta10[116]->id,$resposta11[117]->id,$resposta12[118]->id,
                                $resposta13[119]->id];
           
            
        ?>
        <p class="passos">Passo 1 de 2</p>

        <div class="progress" style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
            <div class="num-progresso-1">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 6.33%" aria-valuenow="4.33" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
            <div class="num-progresso-3">3</div>
        </div>

        <div class="col checkbox-outros">
            <div class="row radio-outros">
                <div class="col">
                    <h6>{{$pergunta1[36]->post_title}}</h6>
                    <div id="radio1-tela1" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta1[149]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta1[149]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta1[149]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta2[150]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta2[150]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta2[150]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-outros">
                <div class="col">
                    <h6>{{$pergunta2[31]->post_title}}</h6>
                    <div id="radio2-tela1" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta3[125]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[125]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta3[125]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta4[126]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[126]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta4[126]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-outros">
                <div class="col">
                    <h6>{{$pergunta3[30]->post_title}}</h6>
                    <select id="descontos" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="{{$resposta5[120]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[120]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta5[120]->post_title}}
                        </option>

                        <option value="{{$resposta6[121]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[121]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta6[121]->post_title}}
                        </option>

                        <option value="{{$resposta7[122]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta7[122]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta7[122]->post_title}}
                        </option>

                        <option value="{{$resposta8[123]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta8[123]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta8[123]->post_title}}
                        </option>

                        <option value="{{$resposta9[124]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta9[124]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta9[124]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row radio-outros">
                <div class="col">
                    <h6>{{$pergunta4[29]->post_title}}</h6>
                    <select id="bonificacoes" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="{{$resposta10[116]->id}}"<?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta10[116]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta10[116]->post_title}}
                        </option>

                        <option value="{{$resposta11[117]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta11[117]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta11[117]->post_title}}
                        </option>

                        <option value="{{$resposta12[118]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta12[118]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta12[118]->post_title}}
                        </option>

                        <option value="{{$resposta13[119]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta13[119]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta13[119]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="proxima next-outros-1">Próxima</div>
    </section>


    <!-- TELA 2 -->
    <section id="outros-tela-2">
        <?php 
            $pergunta1 = $perguntas->where('id',437);
            $pergunta2 = $perguntas->where('id',434);
            $pergunta3 = $perguntas->where('id',431);
            $pergunta4 = $perguntas->where('id',424);
            
            $resposta1=$respostas->where('id',438);
            $resposta2=$respostas->where('id',439);

            $resposta3=$respostas->where('id',435);
            $resposta4=$respostas->where('id',436);

            $resposta5=$respostas->where('id',432);
            $resposta6=$respostas->where('id',433);

            $resposta7=$respostas->where('id',425);
            $resposta8=$respostas->where('id',426);
            $resposta9=$respostas->where('id',427);


            $lista1Respostas2 = [$resposta1[114]->id,$resposta2[115]->id];
            $lista2Respostas2 = [$resposta3[112]->id,$resposta4[113]->id];
            $lista3Respostas2 = [$resposta5[110]->id,$resposta6[111]->id];
            $lista4Respostas2 = [$resposta7[105]->id,$resposta8[106]->id,$resposta9[107]->id];

        ?> 
        <p class="passos">Passo 2 de 3</p>

        <div class="progress"style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-1" ></div>
            <div class="progress-bar color-perguntas-verde" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="num-progresso-2">2</div>
            <div class="num-progresso-3">3</div>
        </div>

        <div class="col checkbox-outros">
            <div class="row radio-outros">
                <div class="col">
                    <h6>{{$pergunta1[28]->post_title}}</h6>
                    <div id="radio1-tela2" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta1[114]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta1[114]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta1[114]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta2[115]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta2[115]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta2[115]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-outros">
                <div class="col">
                    <h6>{{$pergunta2[27]->post_title}}</h6>
                    <div id="radio2-tela2" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta3[112]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[112]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta3[112]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta4[113]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[113]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta4[113]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-outros">
                <div class="col">
                    <h6>{{$pergunta3[26]->post_title}}</h6>
                    <div id="radio3-tela2" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta5[110]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[110]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta5[110]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta6[111]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[111]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta6[111]->post_title}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row radio-outros">
                <div class="col">
                    <h6>{{$pergunta4[24]->post_title}}</h6>
                    <select id="filiais" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="{{$resposta7[105]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta7[105]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta7[105]->post_title}}
                        </option>

                        <option value="{{$resposta8[106]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta8[106]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta8[106]->post_title}}
                        </option>

                        <option value="{{$resposta9[107]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta9[107]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta9[107]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="anterior previous-outros-2">Voltar</div><div class="proxima next-outros-2">Próxima</div>
    </section>


   <!-- TELA 3 -->
   <input type="hidden" name="aba-nome" value="outros">
   <input type="hidden" name="idEmpresa" value="{{$_SESSION['idEmpresa']}}">
   <input type="hidden" name="cont" value="{{$_SESSION['cont']}}">
   <section id="outros-tela-3">
       <?php 
           $pergunta1 = $perguntas->where('id',428);
           $pergunta2 = $perguntas->where('id',421);
           $pergunta3 = $perguntas->where('id',387);

           
           $resposta1=$respostas->where('id',429);
           $resposta2=$respostas->where('id',430);

           $resposta3=$respostas->where('id',422);
           $resposta4=$respostas->where('id',423);

           $resposta5=$respostas->where('id',388);
           $resposta6=$respostas->where('id',389);

           $lista1Respostas3 = [$resposta1[108]->id,$resposta2[109]->id];
           $lista2Respostas3 = [$resposta3[103]->id,$resposta4[104]->id];
           $lista3Respostas3 = [$resposta5[87]->id,$resposta6[88]->id];
          
           
       ?>
       <p class="passos">Passo 3 de 3</p>

       <div class="progress"style="height: 4px;overflow:visible;margin-top:40px;margin-left:40px;margin-bottom:40px;width: 580px;">
        <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-1" ></div>
            <div class="progress-bar color-perguntas-verde" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div><img src="{{asset('images/tick-mark.svg')}}" class="img-progresso-2" ></div>
            <div class="num-progresso-3">3</div>
        </div>

       <div class="col checkbox-outros">
            <div class="row radio-outros">
                <div class="col">
                    <h6>{{$pergunta1[25]->post_title}}</h6>
                    <div id="radio1-tela3" class="row radio">
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta2[109]->id}}">
                            {{$resposta2[109]->post_title}}
                        </div>
                        <div class=" col radio">
                            <input type="radio" value="{{$resposta1[108]->id}}">
                            {{$resposta1[108]->post_title}} 
                        </div>
                    </div> 
                </div>
            </div>
           <div class="row radio-outros">
               <div class="col">
                   <h6>{{$pergunta2[23]->post_title}}</h6>
                   <div id="radio2-tela3" class="row radio">
                       <div class=" col radio">
                           <input type="radio" value="{{$resposta3[103]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[103]->id){ echo 'checked="checked"';}} ?>>
                           {{$resposta3[103]->post_title}}
                       </div>
                       <div class=" col radio">
                           <input type="radio" value="{{$resposta4[104]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[104]->id){ echo 'checked="checked"';}} ?>>
                           {{$resposta4[104]->post_title}}
                       </div>
                   </div> 
               </div>
           </div>
           <div class="row radio-outros">
               <div class="col">
                   <h6>{{$pergunta3[16]->post_title}}</h6>
                   <div id="radio3-tela3" class="row radio">
                       <div class=" col radio">
                           <input type="radio" value="{{$resposta5[87]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[87]->id){ echo 'checked="checked"';}} ?>>
                           {{$resposta5[87]->post_title}}
                       </div>
                       <div class=" col radio">
                           <input type="radio" value="{{$resposta6[88]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[88]->id){ echo 'checked="checked"';}} ?>>
                           {{$resposta6[88]->post_title}}
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <div class="anterior previous-outros-3">Voltar</div><div class="proxima next-outros-3">Próxima</div>
   </section>
   
     <!-- TELA Final -->
    <section id="outros-tela-final">
        <div class="topo-outros-final">
            <img src="{{asset('images/icon-Info-Cadastradas.svg')}}">
            <h3>Informações cadastradas</h3>
            <p>Sobre outros</p>
        </div>
        <div class="row outros-final">
            <div class="col">
                <?php $pergunta1 = $perguntas->where('id',825)?>
                <div class="outros-final-resposta">
                    <p>{{$pergunta1[36]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista1Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="outros-final-img">
                    </div>
                </div> 

                <?php $pergunta2 = $perguntas->where('id',452) ?>
                <div class="outros-final-resposta">
                    <p>{{$pergunta2[31]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="outros-final-img">
                    </div>
                </div> 
                <?php $pergunta3 = $perguntas->where('id',446)?>
                <div class="outros-final-resposta">
                    <p>{{$pergunta3[30]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista3Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="outros-final-img">
                    </div>
                </div> 

                <?php $pergunta4 = $perguntas->where('id',440) ?>
                <div class="outros-final-resposta">
                    <p>{{$pergunta4[29]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista4Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-2">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="outros-final-img">
                    </div>
                </div>
                <?php $pergunta5 = $perguntas->where('id',437)?>
                <div class="outros-final-resposta">
                    <p>{{$pergunta5[28]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista1Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach

                    <div class="previous-3">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="outros-final-img">
                    </div>
                </div> 

                <?php $pergunta6 = $perguntas->where('id',434) ?>
                <div class="outros-final-resposta">
                    <p>{{$pergunta6[27]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-3">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="outros-final-img">
                    </div>
                </div>
            </div>
            <div class="col">
                <?php $pergunta7 = $perguntas->where('id',431) ?>
                <div class="outros-final-resposta">
                    <p>{{$pergunta7[26]->post_title}}</p>    
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista3Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-3">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="outros-final-img">
                    </div>
                </div>
                <?php $pergunta8 = $perguntas->where('id',424) ?>
                <div class="outros-final-resposta"> 
                    <p>{{$pergunta8[24]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista4Respostas2))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-3">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="outros-final-img">
                    </div>
                </div> 
                <?php $pergunta9 = $perguntas->where('id',428) ?>
                <div class="outros-final-resposta">
                    <p>{{$pergunta9[25]->post_title}}</p>   
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista1Respostas3))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-outros-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="outros-final-img">
                    </div>
                </div>
                <?php $pergunta10 = $perguntas->where('id',421) ?>
                <div class="outros-final-resposta"> 
                    <p>{{$pergunta10[23]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas3))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-outros-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="outros-final-img">
                    </div>
                </div> 
                <?php $pergunta11 = $perguntas->where('id',387) ?>
                <div class="outros-final-resposta"> 
                    <p>{{$pergunta11[16]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista3Respostas3))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-outros-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="outros-final-img">
                    </div>
                </div> 
            </div>
        </div>   

        <div class="anterior previous-outros-final">Voltar</div><div class="proxima next-outros-final">Próxima</div>
    </section>
@endsection