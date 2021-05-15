<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="{{route('home')}}"><img src="{{asset('/images/logo-augustus-rodape.svg')}}" /></a>
            </div>
            <div class="col-sm-8">
                <div class="menuarea">
                    <nav>
                        <ul>
                            <li><a href="{{route('ver-empresas')}}">Empresas</a></li>
                            <li><a href="">Dashboard</a></li>
                            <li><a href="">Notícias</a></li>
                            <li><a href="">Sobre</a></li>
                            <li><a href="" id="menu-item">Fale conosco</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="direitos">
        <div class="info">
            © 2020 Augustus. Todos os direitos reservados.
        </div>
    </div>
    <script type="text/javascript" src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/script.js')}}"></script>
</footer>