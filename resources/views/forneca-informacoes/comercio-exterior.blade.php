@extends('forneca-informacoes')

@section('comercio')
    <!-- TELA 1 -->
    <input type="hidden" name="aba-nome" value="comercio">
    <input type="hidden" name="idEmpresa" value="{{$_SESSION['idEmpresa']}}">
    <input type="hidden" name="cont" value="{{$_SESSION['cont']}}">
    <section id="comercio-tela-1">
        <?php 
            $pergunta1 = $perguntas->where('id',382);
            $pergunta2 = $perguntas->where('id',281);


            
            $resposta1=$respostas->where('id',383);
            $resposta2=$respostas->where('id',384);
            $resposta3=$respostas->where('id',385);
            $resposta4=$respostas->where('id',386);

            $resposta5=$respostas->where('id',282);
            $resposta6=$respostas->where('id',283);
            $resposta7=$respostas->where('id',284);
            $resposta8=$respostas->where('id',285);



            $lista1Respostas1 = [$resposta1[83]->id,$resposta2[84]->id,$resposta3[85]->id,$resposta4[86]->id];
            $lista2Respostas1 = [$resposta5[10]->id,$resposta6[11]->id,$resposta7[12]->id,$resposta8[13]->id];
           
            
        ?>

        <div class="col checkbox-comercio">
            <div class="row radio-comercio">
                <div class="col">
                    <h6>{{$pergunta1[15]->post_title}}</h6>
                    <select id="exportacoes" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="{{$resposta1[83]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta1[83]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta1[83]->post_title}}
                        </option>

                        <option value="{{$resposta2[84]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta2[84]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta2[84]->post_title}}
                        </option>

                        <option value="{{$resposta3[85]->id}}"<?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[85]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta3[85]->post_title}}
                        </option>

                        <option value="{{$resposta4[86]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[86]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta4[86]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row radio-comercio">
                <div class="col">
                    <h6>{{$pergunta2[4]->post_title}}</h6>
                    <select id="inportacoes" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="{{$resposta5[10]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[10]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta5[10]->post_title}}
                        </option>

                        <option value="{{$resposta6[11]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[11]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta6[11]->post_title}}
                        </option>

                        <option value="{{$resposta7[12]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta7[12]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta7[12]->post_title}}
                        </option>

                        <option value="{{$resposta8[13]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta8[13]->id){ echo 'selected="selected"';}} ?>>
                            {{$resposta8[13]->post_title}}
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="proxima next-comercio-1">Próxima</div>
    </section>

      <!-- TELA Final -->
    <section id="comercio-tela-final">
        <div class="topo-comercio-final">
            <img src="{{asset('images/icon-Info-Cadastradas.svg')}}">
            <h3>Informações cadastradas</h3>
            <p>Sobre comercio</p>
        </div>
        <div class="row comercio-final">
            <div class="col">
                <?php $pergunta1 = $perguntas->where('id',382)?>
                <div class="comercio-final-resposta">
                    <p>{{$pergunta1[15]->post_title}}</p> 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista1Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-comercio-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="ramo-final-img">
                    </div>
                </div> 
            </div>
            <div class="col">
                <?php $pergunta2 = $perguntas->where('id',281) ?>
                <div class="comercio-final-resposta">
                    <p>{{$pergunta2[4]->post_title}}</p>   
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $lista2Respostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-comercio-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="comercio-final-img">
                    </div>
                </div>
            </div>
        </div>   

        <div class="anterior previous-comercio-final">Voltar</div><div class="proxima next-comercio-final">Próxima</div>
    </section>
@endsection