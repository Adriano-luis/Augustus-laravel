@extends('layouts.basico')

@section('conteudo')
<section class="sobre">
    <div class="banner">
        <div class="row">
            <div class="col-sm icone">
                <img src="{{asset('/images/logo-augustus-rodape.svg')}}" />
            </div>
            <div class="col-sm-10 info">
                <h2>Sobre o Augustus</h2>
                <p>Descobrir quais são as Oportunidades Tributárias da sua empresa é muito importante,
                    porque, num contexto de mercado competitivo, àqueles que investem em conhecimento
                    especializado e possibilidades de crescimento se sobressaem.
                </p>
            </div>
            <div class="form desc">
                <div class="row segunda">
                    <div class="col-sm-6">
                        <p>Já pensou conseguir diagnosticar todas as Oportunidades Tributárias da sua empresa através
                            de um sistema? Essa é a proposta do Augustus. Após responder um questionário elaborado
                            por especialistas com profundo conhecimento sobre o sistema tributário nacional, você tem
                            um diagnóstico imediato das oportunidades.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p>
                            Com a lista de possibilidades em mãos, as empresas podem agir eficientemente por seus
                            direitos de recuperação tributária e posicionar-se no mercado com mais competitividade.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row frase">
                <h5><span>Augustus</span>, a tecnologia aliada ás oportunidades reais de sua empresa.</h5>
            </div>
        </div>
    </div>
    <div class="fundo">
        
    </div>
    <div class="marca">
        <img src="{{asset('/images/img-augustus-fundo.png')}}">
    </div>
</section>
@endsection
