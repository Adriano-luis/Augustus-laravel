@extends('forneca-informacoes')

@section('numero-de-funcionarios')
    <!-- TELA 1 -->
    <input type="hidden" name="aba-nome" value="funcionarios">
    <input type="hidden" name="idEmpresa" value="{{$_SESSION['idEmpresa']}}">
    <input type="hidden" name="cont" value="{{$_SESSION['cont']}}">
    <section id="funcionarios-tela-1">
        <?php 
            $pergunta = $perguntas->where('id',357);


            
            $resposta1=$respostas->where('id',1244);
            $resposta2=$respostas->where('id',358);
            $resposta3=$respostas->where('id',359);
            $resposta4=$respostas->where('id',360);
            $resposta5=$respostas->where('id',361);
            $resposta6=$respostas->where('id',362);

            
            $listaRespostas1 = [$resposta1[158]->id,$resposta2[64]->id,$resposta3[65]->id,$resposta4[66]->id,
            $resposta5[67]->id,$resposta6[68]->id];
            
        ?>

        <div class="col checkbox-funcionarios">
            <div class="row radio-funcionarios">
                <div class="col">
                    <h6>{{$pergunta[11]->post_title}}</h6>
                    <div class="col radio radio-tela">
                        <div class=" row radio">
                            <input type="radio" value="{{$resposta1[158]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta1[158]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta1[158]->post_title}}
                        </div>
                        <div class=" row radio">
                            <input type="radio" value="{{$resposta2[64]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta2[64]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta2[64]->post_title}}
                        </div>
                        <div class=" row radio">
                            <input type="radio" value="{{$resposta3[65]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta3[65]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta3[65]->post_title}}
                        </div>
                        <div class=" row radio">
                            <input type="radio" value="{{$resposta4[66]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta4[66]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta4[66]->post_title}}
                        </div>
                        <div class=" row radio">
                            <input type="radio" value="{{$resposta5[67]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta5[67]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta5[67]->post_title}}
                        </div>
                        <div class=" row radio">
                            <input type="radio" value="{{$resposta6[68]->id}}" <?php foreach ($respostasEmpresa as $value) {if($value->id_resposta == $resposta6[68]->id){ echo 'checked="checked"';}} ?>>
                            {{$resposta6[68]->post_title}}
                        </div>
                    </div>    
                </div>
            </div>
        </div>

        <div class="proxima next-funcionarios-1">Pr??xima</div>
    </section>

      <!-- TELA Final -->
    <section id="funcionarios-tela-final">
        <div class="topo-funcionarios-final">
            <img src="{{asset('images/icon-Info-Cadastradas.svg')}}">
            <h3>Informa????es cadastradas</h3>
            <p>Funcion??rios</p>
        </div>
        <div class="row funcionarios-final">
            <div class="col-4">
                <?php $pergunta = $perguntas->where('id',357)?>
                <div class="funcionarios-final-resposta">
                    <p>{{$pergunta[11]->post_title}}</p>
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    <div class="previous-funcionarios-final">
                        <img src="{{asset('images/icon-Editar.svg')}}" class="
                        -final-img">
                    </div>
                </div> 
            </div>
        </div>   

        <div class="anterior previous-funcionarios-final">Voltar</div><div class="proxima next-funcionarios-final">Pr??xima</div>
    </section>
@endsection