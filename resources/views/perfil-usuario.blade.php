@extends('layouts.basico')

@section('conteudo')
<section class="perfil-usuario">
    <div class="container">
        <div class="row title">
            <h2>Perfil Usuário</h2>
        </div>
        {{isset($erro) && $erro != '' ? $erro : ''}}
        <div class="row info-total">
            <div class="col-sm-4 foto">
                <img  class="img-perfil" src="{{asset('/images/foto3.jpg')}}">
                <div class="row importar">
                    <span>Selecionar foto:</span>
                    <form action="{{route('perfil-usuario')}}" method="POST" enctype="multipart/form-data" accept=".jpg,.png,.svg">
                        @csrf
                        <label for="enviar">Escolher arquivo</label>
                        <input id="enviar" type="file" name="imagem">
                </div>
            </div>
            <div class="col-sm-4 info">
                <span>Nome:</span>
                <p>{{$_SESSION['nome']}}</p>
                <span>Email:</span>
                <p>{{$_SESSION['email']}}</p>
                <span>Perfil:</span>
                <p></p>
            </div>
            <div class="col-sm-4 senha">
                    <span>Alterar senha:</span>
                    <input type="password" name="antiga" placeholder="Senha antiga">
                    <input type="password" name="nova" placeholder="Nova senha">
                    <input type="submit" class="btn" value="Alterar senha"><br/>
                    <div class="sair">
                        <img src="{{asset('/images/icon-Logout.svg')}}" class="img-sair"><a class="link-sair" href="{{ route('logout')}}">Sair</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection