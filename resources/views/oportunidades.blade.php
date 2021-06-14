@extends('layouts.basico')

@section('conteudo')
<section class="oportunidades-geradas">
    <div class="banner">
        <div class="row">
            <div class="col-sm-8 info">
                <h2><span class="titulo">Oportunidades Geradas</span></h2>
                <p>Nosso sistema gera relatórios que vão lhe permitir conhecer quais Oportunidades Tributárias,
                     tanto jurídicas como administrativas, que a sua empresa possui.</p>

                <p class="nome"><span>Informações da empresa:</span></p>
                <div class="empresa">{{$empresa->nome}}</div>
                <div class="row deg-fundo"></div>
                <div class="row teste2">
                    <div class="col-sm-5 info">
                        <div class="row dados">
                            <div class="porcentagem-info">
                                <h3 id="porcentagem">{{round($porcentagem)}}%</h3>
                            </div>
                            <div class="info-texto">
                                DAS INFORMAÇÕES<br/> FORNECIDAS
                            </div>
                        </div>
                        <div class="progress">
                            <div id="barra-0" class="progress-bar " role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-4 oportunidades">
                        <div class="row dados">
                            <img src="{{asset('/images/icon-Informacoes.svg')}}">
                        </div>
                        <div class="ver"><a href="{{route('forneca-informacoes',['id'=>$empresa->id,'cont'=>$cont])}}">Editar informações</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <img class="marca" src="{{asset('/images/img-augustus-fundo.png')}}">
            </div>
            <div class="lista-oportunidades-topo">

            </div>
        </div>
    </div>
    <div class="lista-oportunidades">
        <?php $qt=sizeof($relatorios) ?>
        <input type="hidden" id="quantidade" value="{{$qt}}">
        <div class="row qt-oportunidades">
            <img src="{{asset('/images/icon-Estrela-Oportunidade.svg')}}">
            <h2><span class="qt-titulo">{{$qt}} Oportunidades Geradas</span></h2>
        </div>
        <hr>
        <?php $aux = 0; ?>
        @foreach ($relatorios as $relatorio)
            <div class="titulo-ralatorio">
                <h6>{{$relatorio->post_title}}</h6>
            </div>
            <div class="relatorio indice-{{$aux}}">
                <div class=" classificacao">
                    <div class="row status">
                        <p>Classifique o status da Oportunidade:</p>
                        <div class="proxima">Salvar Alterações</div>
                    </div>
                    <div class="row marcar-classificacao">
                    <div class=" row radios">
                        <hr class="linha">
                        <input type="radio" class="radio-classi-0" value="0">
                        <input type="radio" class="radio-classi-1" value="1">
                        <input type="radio" class="radio-classi-2" value="2">
                        <input type="radio" class="radio-classi-3" value="3">
                        <input type="radio" class="radio-classi-4" value="4">
                        <input type="radio" class="radio-classi-5" value="5">
                        <input type="radio" class="radio-classi-6" value="6">
                    </div>
                    </div>
                    <div class="row textos">
                        <p>Sem classificação</p>
                        <p>Descartada</p>
                        <p>Enviada</p>
                        <p>Em espera</p>
                        <p>Em análise</p>
                        <p>Implementar</p>
                        <p>Implementada</p>
                    </div>
                </div>
                <div class="row geral">
                    <div class="col ">
                        <p>Forma de Recuperação</p>
                        <div class="administrativo">
                            <img src="">
                            <span>administrativo</span>
                        </div>
                    </div>
                    <div class="col">
                        <p>Tributação</p>
                        <div class="tributacao">
                            <img src="">
                            <span>Municipal</span>
                        </div>
                    </div>
                    <div class="col">
                        <p>Probabilidade de Êxito</p>
                        <div class="exito">
                            <img src="">
                            <span>Remota</span>
                        </div>
                    </div>
                </div>
                <div class="row quadro">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" style="margin-left:0px !important;">
                            <a class="nav-link" id="resumo-tab" data-toggle="tab" href="#resumo" role="tab" aria-controls="resumo" aria-selected="true" style="padding-top: 15px;">Resumo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="entendendo-tab" data-toggle="tab" href="#entendendo" role="tab" aria-controls="entendendo" aria-selected="true">Entendendo a<br> Oportunidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="posicao-tab" data-toggle="tab" href="#posicao" role="tab" aria-controls="posicao" aria-selected="true">Posição dos<br> Tribunais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="estimativas-tab" data-toggle="tab" href="#estimativas" role="tab" aria-controls="estimativas" aria-selected="true">Estimativas<br> de Ganho</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="aproveitamento-tab" data-toggle="tab" href="#aproveitamento" role="tab" aria-controls="aproveitamento" aria-selected="true">Formas de<br> Aproveitamento</a>
                        </li>
                      </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="resumo" role="tabpanel" aria-labelledby="resumo-tab">
                        Trata-se de excelente oportunidade de recuperação tributária referente aos valores indevidamente pagos a título de CPRB (Contribuição Previdenciária sobre a Receita Bruta) incidentes sobre valores referentes ao PIS e à COFINS. Em linhas gerais, as empresas obrigadas ao regime da CPRB passaram a recolher a contribuição previdenciária patronal em percentual (que variava de 1,5% a 4%) sobre o faturamento total da empresa ao invés dos tradicionais 20% sobre a folha de salários. Por sua vez, como é de conhecimento geral, o PIS e a COFINS também incidem sobre a mesma grandeza. Nessa seara, o Fisco Federal exige que os valores a serem recolhidos a título de PIS e COFINS fossem incluídos na base de cálculo da CPRB, indo em sentido contrário ao conceito de faturamento/receita.

                        PROBABILIDADE DE ÊXITO: PROVÁVEL – mais de 75%.
                    </div>
                    <div class="tab-pane fade" id="entendendo" role="tabpanel" aria-labelledby="entendendo-tab">
                        A contribuição patronal sobre a receita bruta foi instituída pela Lei nº 12.546/2011 em substituição às contribuições previstas nos incisos I e III do caput do art. 22 da Lei 8.212/91, em caráter obrigatório até o final de 2015, à alíquota variando de 0 (zero) à 3% (três por cento), de acordo com a atividade exercida pela empresa.

                        Ocorre que a previsão contida no art. 9ª, §7º, da citada Lei, incluída pela Lei nº 12.715/2012, e no art. 5º, II, d, do Decreto 7.828/2012, ao estabelecerem quais receitas estariam excluídas da base de cálculo da indigitada contribuição, não o fazem em relação ao PIS e COFINS, acabando por permitirem a incidência do tributo sobre valores que não integram a receita bruta ou faturamento do contribuinte.

                        Por conseguinte, tem-se que a inclusão do PIS e da COFINS na base de cálculo da contribuição patronal viola o conceito de faturamento/receita previsto no art. 195, I, b, da Constituição Federal, na medida em que deve corresponder tão somente ao produto de todas as vendas de mercadorias e prestações de serviços.

                        Destarte, afigura-se contrária à norma inserta no Texto Constitucional a inclusão do PIS e da COFINS na base de cálculo da CPRB, tendo em vista que constitui receita fiscal da União e não faturamento ou receita do contribuinte.

                        EMBASAMENTO LEGAL:

                        – Art. 195, I, “a”, da Constituição Federal;

                        – Art. 110 do Código Tributário Nacional;

                        – Lei 12.546/2011 e suas alterações.
                    </div>
                    <div class="tab-pane fade" id="posicao" role="tabpanel" aria-labelledby="posicao-tab">
                        O Supremo Tribunal Federal, apreciando a questão da identidade conceitual entre faturamento e receita bruta assentou, ao julgar a ADECON 1-1-DF, consolidou o conceito de faturamento manifestado no julgamento do RE 150.764-PE, como sendo o produto de todas as vendas realizada pela empresa.

                        Ainda, no julgamento do RE 574.706 (submetido à sistemática da repercussão geral – Tema nº 69), no qual se discutia a constitucionalidade da inclusão do ICMS na base de cálculo da COFINS, o STF reconheceu a ofensa perpetrada ao art. 195, I, da CF, sob o fundamento de que a base de cálculo da COFINS somente pode incidir sobre a soma dos valores obtidos nas operações de venda ou de prestações de serviços, ou seja, sobre a riqueza obtida com a realização da operação, e não sobre ICMS, que constitui ônus fiscal e não faturamento.

                        O entendimento do STF com relação à exclusão do ICMS da base de cálculo do PIS e da Cofins, guardadas as devidas proporções, pode ser entendido à tese da exclusão do PIS e da COFINS da base de cálculo da CPRB, tendo em vista a identidade das circunstâncias de fato que envolvem as relações jurídico-tributárias em análise.

                        Veja-se, inclusive, que o próprio Tribunal Regional Federal da 4ª Região reconhece a identidade entre os temas em evidência:

                        TRIBUTÁRIO. CONTRIBUIÇÃO PREVIDENCIÁRIA SUBSTITUTIVA DA FOLHA DE SALÁRIOS. MP Nº 540/11. LEI Nº 12.546/11. BASE DE CÁLCULO. RECEITA BRUTA. INCLUSÃO DO ICMS, ISS, PIS E COFINS. IMPOSSIBILIDADE.

                        A Medida Provisória nº 540/11, convertida na Lei nº 12.546/11, previu, para determinados setores econômicos, a substituição da base de cálculo da contribuição previdenciária, que até então se dava sobre a remuneração de empregados e avulsos (art. 22, inc. I, da Lei nº 8.212/91), pela receita bruta da empresa. 2. Na lacuna da lei, o conceito de receita bruta foi buscado pela Receita Federal do Brasil na legislação do PIS e da COFINS, uma vez tais contribuições também têm como fato gerador o auferimento de receita por pessoa jurídica. 3. O Supremo Tribunal Federal, na sessão do dia 15-03-2017, ao finalizar o julgamento do RE nº 574.706, de relatoria da Min. Cármen Lúcia, submetido à sistemática da repercussão geral (Tema nº 69), reconheceu a inconstitucionalidade da inclusão do ICMS na base de cálculo do PIS e da COFINS, por violação ao art. 195, inc. I, alínea “b”, da Constituição Federal, ao entendimento de que os valores referentes aquele tributo não se incorporam ao patrimônio do contribuinte e, portanto, não podem integrar a base de cálculo das referidas contribuições, destinada ao custeio da seguridade social. 4. Nessa linha de raciocínio, indevida a inclusão do ICMS, do PIS e da COFINS na base de cálculo da contribuição instituída pela Lei nº 12.546/11, uma vez que os valores referentes àquelas exações não têm natureza de faturamento/receita bruta. 5. Sentença mantida. 6. Julgamento afetado à 1ª Seção para uniformização do entendimento das Turmas Tributárias deste Tribunal.

                        (TRF4 5006620-88.2015.404.7009, PRIMEIRA TURMA, Relator para Acórdão ROBERTO FERNANDES JÚNIOR, juntado aos autos em 18/05/2017)

                        Portanto, não restam dúvidas de que é inconstitucional a inclusão dos valores apurados à título de PIS e COFINS na base de cálculo da Contribuição Previdenciária sobre a Receita Bruta – CPRB, tendo em vista que não representam faturamento/receita da empresa nos moldes do artigo 195, I, b, da Constituição Federal.
                    </div>
                    <div class="tab-pane fade" id="estimativas" role="tabpanel" aria-labelledby="estimativas-tab">
                        A cada R$ 10.000,00 pagos a título de PIS e COFINS estima-se a recuperação de CPRB no importe de
                        R$ 200,001.

                        Esta recuperação pode retornar até os pagamentos efetuados nos últimos 5 anos a contar da data do pedido de requerimento judicial ou administrativo.

                        A CPRB por sua vez foi obrigatória de 2012 até novembro de 2015 a depender da atividade da empresa. Após 2015 a CPRB continua existindo, todavia, a adesão é facultativa, sendo que nessa hipótese a tese continua aplicável.

                        Sendo assim, caso uma empresa do lucro real tenha faturado, entre os anos de 2012 e 2015, o importe de R$ 10.000.000,00, poderá recuperar, em valores históricos, o montante aproximado de R$ 200.000,00.

                        OBS: sobre o valor a recuperar incide correção pela Taxa SELIC da data do pagamento indevido até a data da recuperação.

                        1 – valores calculados levando em consideração uma alíquota de CPRB de 2%.
                    </div>
                    <div class="tab-pane fade" id="aproveitamento" role="tabpanel" aria-labelledby="aproveitamento-tab">...</div>
                </div>
            </div>
            <?php $aux++; ?>
        @endforeach
    </div>
</section>
@endsection
