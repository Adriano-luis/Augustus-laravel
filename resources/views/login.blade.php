@extends('layouts.basico-login')
@section('conteudo')
    <section>
        <div class="container-fluid login">
            <div class="row">
                <div class="col">
                    <div class="retangulo">
                        <div class="form-area">
                            <div class="logo">
                                <img src="{{asset('/images/logo.png')}}" class="logo"/>
                            </div>
                            <div class="form">
                                <form action="{{route('login')}}" method="POST">
                                    @csrf
                                    <label><h5>Seja bem-vindo</h5> <a href="{{route('cadastrar-usuario')}}">Cadastrar Usuário</a></label>
                                    <label><p>Informe seus dados de login para continuar</p></label><br>
                                    {{isset($erro) && $erro != '' ? $erro : ''}}
                                    <input type="email" name="emaiLogin" id="email-login" autocomplete="off" placeholder="Seu email"/>
                                    <input type="password" name="passwordLogin" id="password-login" autocomplete="off" placeholder="Senha"/><br/>
                                    <div class="checkbox">
                                        <input type="checkbox" name="termos" required class="check-login"/>Aceito os <a href="/termos"> Termos de uso</a>
                                    </div>
                                    <input type="submit"  value="Entrar"/>
                                    <label class="esqueceu">Esqueceu sua senha?</label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="infologin">
                    Através de informações que serão repassadas ao sistema, serão gerados, de forma automática,
                    relatórios que vão lhe permitir conhecer quais <span>Oportunidades Tributárias</span>, tanto jurídicas
                    como administrativas, que a sua empresa possui.
                </div>
            </div>
        </div>
    </section>
@endsection