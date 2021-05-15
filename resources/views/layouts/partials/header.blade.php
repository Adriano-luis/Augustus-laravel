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
                                <li><a href="">Notícias</a></li>
                                <li><a href="">Sobre</a></li>
                                <li><a href="" id="menu-item">Fale conosco</a></li>
                            </ul>
                           <!-- <a href="{{ route('logout')}}">sair</a> -->
                        </nav>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="usuario">
                        <img src="{{asset('/images/user.png')}}">
                        <div class="info">
                            <span>Seja bem-vindo</span><br/>
                            
                        </div>
                        <a href="">
                            <img class="dado" src="{{asset('/images/icon-Arow.svg')}}" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('modal')
</header>