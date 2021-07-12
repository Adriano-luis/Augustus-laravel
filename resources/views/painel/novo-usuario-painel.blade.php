@extends('adminlte::page')
@section('content')
    <section>
        <div class="incluir-usuario">
            <div class="col">
                <h3 class="titulo-pagina">Novo Usuário</h3>
            </div>
            <hr>
            <form action="{{route('novo-usuario-painel')}}" method="POST">
                @csrf
                {{isset($cadastrado) && $cadastrado != '' ? $cadastrado : ''}}
                {{$errors->has('nomeUsuario') ? $errors->first('nomeUsuario') : ''}}<br>
                {{$errors->has('emailUsuario') ? $errors->first('emailUsuario') : ''}}<br>
                {{$errors->has('senhaUsuario') ? $errors->first('senhaUsuario') : ''}}<br>
                <div>
                    <label>Nome:</label><br>
                    <input type="text" name="nomeUsuario">
                </div>
                <div>
                    <label>Email:</label><br>
                    <input type="email" name="emailUsuario">
                </div>
                <div>
                    <label>Senha:</label><br>
                    <input type="password" name="senhaUsuario">
                </div>

                <input type="submit" class="proxima" value="Salvar">
            </form>
        </div>
    </section>
@endsection
@section('css')						
    <link rel="stylesheet" type="text/css" href="{{asset('/css/painel.css')}}"/>
@endsection
