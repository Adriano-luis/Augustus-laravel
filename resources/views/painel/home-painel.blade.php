@extends('adminlte::page')
@section('content')
    <section>
        <div class="dashboard">
            <div class="col apresentacao">
                <div class="row aparesentacao-img">
                    <img src="{{asset('/images/logo.png')}}" />
                </div>
                <div class="row apresentacao-texto">
                    Bem-vindo ao Painel Administrativo Augustus,
                    aqui você pode adicionar e editar Relátorios, Notícias e formas de aproveitamento
                    que serão apresentados no site Augustus.
                </div>
            </div>
        </div>
    </section>
@endsection



@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/painel.css')}}"/>
@endsection

@section('js')
    <!-- import de js -->
@endsection