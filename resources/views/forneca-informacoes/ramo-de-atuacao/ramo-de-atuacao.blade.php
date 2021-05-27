@extends('forneca-informacoes')

@section('ramo-de-atuacao')
    <!-- TELA 1 -->
    <section id="ramo-tela-1">
        <?php $pergunta = $perguntas->where('id',329)?>
        <h4>{{$pergunta[8]->post_title}}</h4>   
        <p>Passo 1 de 4</p>

        <div class="progress" style="height: 4px; overflow:visible;margin-top:40px">
            <div class="num-progresso">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 33.33%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">2</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width:33.33%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">3</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width:33.33%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">4</div>
        </div>

        <form action="">
            <div class="row checkbox-ramo">
                <div class="col">
                    <div class="check-option"><input type="checkbox"><span>Não comercializa no atacado</span></div>
                    <div class="check-option"><input type="checkbox"><span>Agrotóxicos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Alimentos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Automotivo</span></div>
                    <div class="check-option"><input type="checkbox"><span>Eletro-eletrônicos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Eletromóveis</span></div>
                </div>
                <div class="col">
                    <div class="check-option"><input type="checkbox"><span>Equipamentos de informática em geral</span></div>
                    <div class="check-option"><input type="checkbox"><span>Farmácia - Saúde</span></div>
                    <div class="check-option"><input type="checkbox"><span>Madeira</span></div>
                    <div class="check-option"><input type="checkbox"><span>Materiais de construção</span></div>
                    <div class="check-option"><input type="checkbox"><span>Têxtil</span></div>
                    <div class="check-option"><input type="checkbox"><span>Outros</span></div>
                </div>
            </div>
        </form>

        <div class="proxima next-1">Próxima</div>
    </section>


    <!-- TELA 2 -->
    <section id="ramo-tela-2">
        <?php $pergunta = $perguntas->where('id',313) ?>
        <h4>{{$pergunta[7]->post_title}}</h4>   
        <p>Passo 2 de 4</p>

        <div class="progress" style="height: 4px; overflow:visible;margin-top:40px">
            <div class="num-progresso">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 33.33%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">2</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width:33.33%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">3</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width:33.33%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">4</div>
        </div>

        <form action="">
            <div class="row checkbox-ramo">
                <div class="col">
                    <div class="check-option"><input type="checkbox"><span>Não comercializa no atacado</span></div>
                    <div class="check-option"><input type="checkbox"><span>Agrotóxicos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Alimentos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Automotivo</span></div>
                    <div class="check-option"><input type="checkbox"><span>Eletro-eletrônicos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Eletromóveis</span></div>
                </div>
                <div class="col">
                    <div class="check-option"><input type="checkbox"><span>Equipamentos de informática em geral</span></div>
                    <div class="check-option"><input type="checkbox"><span>Farmácia - Saúde</span></div>
                    <div class="check-option"><input type="checkbox"><span>Madeira</span></div>
                    <div class="check-option"><input type="checkbox"><span>Materiais de construção</span></div>
                    <div class="check-option"><input type="checkbox"><span>Têxtil</span></div>
                    <div class="check-option"><input type="checkbox"><span>Outros</span></div>
                </div>
            </div>
        </form>
        <div class="anterior previous-2">Voltar</div><div class="proxima next-2">Próxima</div>
    </section>


    <!-- TELA 3 -->
    <section id="ramo-tela-3">
        <?php $pergunta = $perguntas->where('id',302) ?>
        <h4>{{$pergunta[6]->post_title}}</h4>   
        <p>Passo 3 de 4</p>

        <div class="progress" style="height: 4px; overflow:visible;margin-top:40px">
            <div class="num-progresso">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 33.33%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">2</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width:33.33%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">3</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width:33.33%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">4</div>
        </div>

        <form action="">
            <div class="row checkbox-ramo">
                <div class="col">
                    <div class="check-option"><input type="checkbox"><span>Não comercializa no atacado</span></div>
                    <div class="check-option"><input type="checkbox"><span>Agrotóxicos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Alimentos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Automotivo</span></div>
                    <div class="check-option"><input type="checkbox"><span>Eletro-eletrônicos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Eletromóveis</span></div>
                </div>
                <div class="col">
                    <div class="check-option"><input type="checkbox"><span>Equipamentos de informática em geral</span></div>
                    <div class="check-option"><input type="checkbox"><span>Farmácia - Saúde</span></div>
                    <div class="check-option"><input type="checkbox"><span>Madeira</span></div>
                    <div class="check-option"><input type="checkbox"><span>Materiais de construção</span></div>
                    <div class="check-option"><input type="checkbox"><span>Têxtil</span></div>
                    <div class="check-option"><input type="checkbox"><span>Outros</span></div>
                </div>
            </div>
        </form>
        <div class="anterior previous-3">Voltar</div><div class="proxima next-3">Próxima</div>
    </section>


    <!-- TELA 4 -->
    <section id="ramo-tela-4">
        <?php $pergunta = $perguntas->where('id',341) ?>
        <h4>{{$pergunta[9]->post_title}}</h4>   
        <p>Passo 4 de 4</p>

        <div class="progress" style="height: 4px; overflow:visible;margin-top:40px">
            <div class="num-progresso">1</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width: 33.33%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">2</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width:33.33%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">3</div>
            <div class="progress-bar color-perguntas" role="progressbar" style="width:33.33%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="33.33"></div>
            <div class="num-progresso">4</div>
        </div>

        <form action="">
            <div class="row checkbox-ramo">
                <div class="col">
                    <div class="check-option"><input type="checkbox"><span>Não comercializa no atacado</span></div>
                    <div class="check-option"><input type="checkbox"><span>Agrotóxicos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Alimentos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Automotivo</span></div>
                    <div class="check-option"><input type="checkbox"><span>Eletro-eletrônicos</span></div>
                    <div class="check-option"><input type="checkbox"><span>Eletromóveis</span></div>
                </div>
                <div class="col">
                    <div class="check-option"><input type="checkbox"><span>Equipamentos de informática em geral</span></div>
                    <div class="check-option"><input type="checkbox"><span>Farmácia - Saúde</span></div>
                    <div class="check-option"><input type="checkbox"><span>Madeira</span></div>
                    <div class="check-option"><input type="checkbox"><span>Materiais de construção</span></div>
                    <div class="check-option"><input type="checkbox"><span>Têxtil</span></div>
                    <div class="check-option"><input type="checkbox"><span>Outros</span></div>
                </div>
            </div>
        </form>
        <div class="anterior previous-4">Voltar</div><div class="proxima next-4">Próxima</div>
    </section>
@endsection