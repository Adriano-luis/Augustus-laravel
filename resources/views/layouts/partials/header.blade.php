<header>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <a href="{{route('home')}}"><img src="{{asset('/images/logo.png')}}" class="custom-logo"></a>
                </div>
                <div class="col-sm-7">
                    <div class="menuarea">
                        <nav>
                            <ul>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empresas</a>
                                    <div class="dropdown-menu sub-menu">
                                        <a href="{{route('nova-empresa')}}" ><li class="primeiro"><img src="{{asset('/images/icon-Add.svg')}}" />Cadastrar empresa</li></a>
                                        <a href="{{route('ver-empresas')}}"><li><img src="{{asset('/images/icon-Visualizar.svg')}}" />Ver empresas</li></a>
                                    </div>
                                </div>
                                <li><a href="">Dashboard</a></li>
                                <li><a href="{{route('noticias')}}">Notícias</a></li>
                                <li><a href="{{route('sobre')}}">Sobre</a></li>
                                <li><a href="" id="menu-item">Fale conosco</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="usuario">
                        <img src="{{asset('/images/user.png')}}" class="avatar">
                        <div class="info">
                            <span>Seja bem-vindo</span><br/>
                            <p>{{$_SESSION['nome']}}</p>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="dado" src="{{asset('/images/icon-Arow.svg')}}" /></a>
                            <div class="dropdown-menu sub-menu">
                                <a href="{{route('perfil-usuario')}}"><li class="primeiro"><img src="{{asset('/images/icon-Profile.svg')}}" />Perfil</li></a>
                                <a href="{{ route('logout')}}"><li><img src="{{asset('/images/icon-Logout.svg')}}" />Sair</li></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-contato" class="modal-container">
        <div class="m-contato">
            <button class="fechar">x</button>
            <h2>Entre em contato conosco</h2>
            <form>
                <div class="row">
                    <input type="text" name="nome" placeholder="Nome">
                </div>
                <div class="row">
                    <input type="email" name="email" placeholder="E-mail">
                </div>
                <div class="row">
                    <input type="text" name="assunto" placeholder="Assunto">
                </div>
                <div class="row">
                    <textarea name="mensagem"  cols="30" rows="10" placeholder="Mensagem"></textarea>
                </div>
                <div class="row">
                    <input type="submit" value="Enviar">
                </div>
                <div class="row">
                    <span>Ou nos envie um email:<br/> contato@revisefacil.com.br</span>
                </div>
            </form>
        </div>
    </div>
</header>