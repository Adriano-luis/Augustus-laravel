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

        <div class="col checkbox-comercio">
            <div class="row radio-comercio">
                <div class="col">
                    <h6>{{$pergunta1[15]->post_title}}</h6>
                    <select id="exportacoes" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="">Lucro Real</option>
                        <option value="">Lucro Presumido</option>
                        <option value="">Simples Nacional</option>
                    </select>
                </div>
            </div>
            <div class="row radio-comercio">
                <div class="col">
                    <h6>{{$pergunta2[4]->post_title}}</h6>
                    <select id="inportacoes" class="select">
                        <option value="">Escolha uma opção</option>
                        <option value="">Lucro Real</option>
                        <option value="">Lucro Presumido</option>
                        <option value="">Simples Nacional</option>
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
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas1))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="comercio-final-img">
                </div> 
            </div>
            <div class="col">
                <?php $pergunta2 = $perguntas->where('id',281) ?>
                <div class="comercio-final-resposta">
                    <p>{{$pergunta2[4]->post_title}}</p>   
                    <?php /* 
                    @foreach ($respostasEmpresa as $resp)
                        @if (in_array($resp->id_resposta, $listaRespostas3))
                            {{$resp->post_title}}
                        @endif
                    @endforeach
                    */?>
                    <img src="{{asset('images/icon-Editar.svg')}}" class="comercio-final-img">
                </div>
            </div>
        </div>   

        <div class="anterior previous-comercio-final">Voltar</div><div class="proxima next-comercio-final">Próxima</div>
    </section>
@endsection