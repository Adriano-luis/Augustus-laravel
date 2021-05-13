<header>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    logo
                </div>
                <div class="col-sm-7">
                    <div class="menuarea">
                        <nav>
                           <a href="{{ route('logout')}}">sair</a>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="usuario">
                        <img src="/assets/images/user.png">
                        <div class="info">
                            <span>Seja bem-vindo</span><br/>
                            
                        </div>
                        <a href="">
                            <img class="dado" src="/assets/images/icon-Arow.svg" />
                        </a>
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