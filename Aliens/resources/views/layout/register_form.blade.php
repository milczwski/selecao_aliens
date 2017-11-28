<div class="jumbotron vertical-center vertical-center col-sm-4 col-sm-offset-4" style="margin-top:10%;">
    <form method="post" action="{{'/register'}}">
        <div class="form-group">
            <label for="email">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
        </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>    
    </form>

    <a href="login">Clique aqui voltar à tela inicial.</a>
</div>