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
                <p>Descobrir quais são as Oportunidades Tributárias para a sua empresa é muito importante, pois,<br/>
                 nos dias atuais, os inúmeros segmentos empresariais estão cada vez mais competitivos, fazendo<br/>
                  com que aqueles que possuem uma expertise maior se sobressaia frente aos demais.</p>
            </div>
            <div class="form desc">
                <div class="row segunda">
                    <div class="col-sm-6">
                        <p>Tal expertise vai muito além do ramo negocial propriamente dito, na maioria das vezes está
                    relacionado com a busca de alternativas que, de certa forma, tragam possibilidades financeiras
                    a mais, as quais, podem com toda a certeza fazer com que a empresa consiga se alavancar no mercado,
                    com a utilização de novos recursos financeiros.</p>
                    </div>
                    <div class="col-sm-6">
                        <p>O Augustus surgiu com esse intuito, de levar para as empresas mais uma opção para enfrentar esse 
                        mercado tão competitivo, com a utilização de tecnologias que irá, de forma direta, informatizada e 
                        totalmente atualizada, apresentar quais são as Oportunidades Tributárias possíveis de serem utilizadas, 
                        e com isso, propiciar a mesma a possibilidade de discutir seus direitos frente a realidades atuais.</p>
                    </div>
                </div>
            </div>
            <div class="row frase">
                <h5><span>Augustus</span>, a tecnologia aliada as oportunidades reais de sua empresa.</h5>
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
