@component('mail::message')
Está é a sua opotunidade:

<h1>Resumo:</h1>
{{$resumo}}<br><br>
<h1>Entendendo:</h1>
{{$entendendo}}<br><br>
<h1>Posição:</h1>
{{$posicao}}<br><br>
<h1>Estimativas:</h1>
{{$estimativas}}<br><br>


@component('mail::button', ['url' => 'http://augustus.erpscam.com.br/'])
Ver Oportunidade Completa
@endcomponent

Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent
