@extends('layouts.basico')

@section('conteudo')
<section class="perfil-usuario">
    <div class="container">
        <div class="row title">
            <h2>Cadastrar Usuário</h2>
        </div>
        <form action="{{route('cadastrar-usuario')}}" method="POST">
            @csrf
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
                    <div class="sair">
                        <img src="{{asset('/images/icon-Logout.svg')}}" class="img-sair"><a class="link-sair" href="{{ route('logout')}}">Sair</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection