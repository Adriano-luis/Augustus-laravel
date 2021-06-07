@extends('layouts.basico-login')

@section('conteudo')
<section class="perfil-usuario">
    <div class="container">
        <div class="row title">
            <h2>Cadastrar Usuário</h2> <a href="{{route('login')}}">- Fazer Login</a>
        </div>
        <form action="{{route('cadastrar-usuario')}}" method="POST">
            @csrf
            {{isset($cadastrado) && $cadastrado != '' ? $cadastrado : ''}}
            {{$errors->has('nome') ? $errors->first('nome') : ''}}<br>
            {{$errors->has('email') ? $errors->first('email') : ''}}<br>
            {{$errors->has('senha') ? $errors->first('senha') : ''}}<br>
            <div class="row info-total">
                <div class="col-sm-4 info">
                    <span>Nome:</span>
                    <p><input type="text" name="nome"></p>
                    <span>Email:</span>
                    <p><input type="email" name="email"></p>
                </div>
                <div class="col-sm-4 senha">
                    <span>Senha:</span>
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="submit" class="btn" value="Salvar"><br/>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection