@extends('adminlte::page')
@section('content')
    <section>
        <div class="alterar-senha">
            <div class="col">
                <h3 class="titulo-pagina">Alterar Senha</h3>
            </div>
            <hr>
            <form action="{{route('alterar-senha-painel')}}" method="POST">
                @csrf
                {{isset($erro) && $erro != '' ? $erro : ''}}
                {{$errors->has('email') ? $errors->first('email') : ''}}<br>
                {{$errors->has('antigaSenha') ? $errors->first('antigaSenha') : ''}}<br>
                {{$errors->has('novaSenha') ? $errors->first('novaSenha') : ''}}<br>
                <div>
                    <label>Email:</label><br>
                    <input type="email" name="email">
                </div>
                <div>
                    <label>Senha Antiga:</label><br>
                    <input type="password" name="antigaSenha">
                </div>
                <div>
                    <label>Senha Nova:</label><br>
                    <input type="password" name="novaSenha">
                </div>

                <input type="submit" class="proxima" value="Alterar">
            </form>
        </div>
    </section>
@endsection
@section('css')						
    <link rel="stylesheet" type="text/css" href="{{asset('/css/painel.css')}}"/>
@endsection
