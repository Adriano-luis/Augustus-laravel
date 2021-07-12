@component('mail::message')
Nova Oportunidade!

Uma nova Oportunidade acabou de ser adicionada, veja se ela se enquadra á sua empresa e não perca essa chance!

@component('mail::button', ['url' => 'http://augustus.erpscam.com.br/'])
Ver Oportunidade
@endcomponent

Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent
